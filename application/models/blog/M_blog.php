<?php
class M_blog extends CI_Model
{
    
	public function list_blog()
	{
		$this->db->order_by('blog_id','desc');
		return	$this->db->get('blog`')->result();
	}

public function all_blogs($limitstart,$config){
       $this->db->select("*");
       $this->db->from("blog");
        $this->db->limit($config,$limitstart);
        $this->db->order_by('blog_id', 'desc');
     return $this->db->get()->result();
  }

    public function get_blog_by_url($blog_url) {
        $query = $this->db->where('title_url', $blog_url)->get('blog');

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }
  
public function list_blogs($limitstart,$config)
{       
$query=$this->db->query("select * from blog ORDER BY blog_id DESC limit " . $limitstart . "," . $config . " ");
return $query->result();
}
   
public function list_search_blogs($search_test)
{
$this->db->select("*");
$this->db->from("blog");
$this->db->like('title',$search_test);
$this->db->or_like('descriptions',$search_test);
$query = $this->db->get();
return $query->result();
}
public function list_recent_blogs($limit = 4)
    {
        // Load the secondary database
        $db_sharksjob = $this->load->database('sharksjob_backend', TRUE);

        $query = $db_sharksjob->from('blog')
                              ->order_by('cr_date', 'DESC')
                              ->limit($limit)
                              ->get();

        return $query->result_array(); 
    }
    public function list_recent_2_blogs($limit = 2)
    {
        // Load the secondary database
        $db_sharksjob = $this->load->database('sharksjob_backend', TRUE);

        $query = $db_sharksjob->from('blog')
                              ->order_by('cr_date', 'DESC')
                              ->limit($limit)
                              ->get();

        return $query->result_array(); 
    }

    public function list_all_blog()
    {
        // Load the secondary database
        $db_sharksjob = $this->load->database('sharksjob_backend', TRUE);

        $query = $db_sharksjob->from('blog')
                              ->order_by('cr_date', 'DESC')
                              ->get();

        return $query->result_array(); 
    }
	public function record_count($tbl)
 { 
	return $this->db->count_all($tbl); 
 }
	public function insert_blog($data)
	{
        $this->db->insert('blog',$data);
        $insert_id =   $this->db->insert_id();
        return $insert_id;
    }

	public function get_blog($id)
    {
     $this->db->where('blog_id',$id); 
    return  $this->db->get('blog')->row();  	
	}
	
	public function get_blog_home($value)
    {
    $this->db->where('title_url',$value);
    return  $this->db->get('blog')->row();  	
	}
	
    public function get_blog_by_title_url($title_url)
	{
	$this->db->where('title_url',$title_url); 
    return  $this->db->get('blog')->row();  	
	}
	public function get_blog_by_short_url($short_url)
	{
	$this->db->where('short_url',$short_url); 
    return  $this->db->get('blog')->row();  	
	}
	public function update_blog($id,$data)
	{       
	$this->db->where('blog_id',$id);
	return  $this->db->update('blog',$data);		
	}
	public function delete_blog($id)
	{          
	    $this->db->where('blog_id',$id);
		return  $this->db->delete('blog');	
	}
}

?>