<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');


class Settings extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Registration_model');
        $this->load->model("blog/m_blog");
		
        $this->load->model('model/blog/M_blog', 'M_blog');
        $this->load->model('model/blog/M_blog', 'M_blog');
        $this->load->model('M_Candidate_profile');	
    }
    public function communication()
    {
        //$candidate_id =$_SESSION['candidate_id'];
        //$data['user_details']=$this->M_Candidate_profile->get_candidate_details($candidate_id);   
        $db_name1 = "sharksjob_backend";
        $this->db->query("use " .$db_name1. "");
        $data['recent_blogs'] = $this->M_blog->list_recent_blogs(4);

        //$candidate_id = $this->session->userdata["candidate_id"];
        $this->load->view('recruiter/msute_candidate_login_header', @$data);
	    $this->load->view('recruiter/communication', @$data);
	    $this->load->view('recruiter/candidate_footer', @$data);
    }

    public function account()
    {
        //$candidate_id =$_SESSION['candidate_id'];
        //$data['user_details']=$this->M_Candidate_profile->get_candidate_details($candidate_id);   
        $db_name1 = "sharksjob_backend";
        $this->db->query("use " .$db_name1. "");
        $data['recent_blogs'] = $this->M_blog->list_recent_blogs(4);

        //$candidate_id = $this->session->userdata["candidate_id"];
        $this->load->view('recruiter/msute_candidate_login_header', @$data);
        $this->load->view('recruiter/account', @$data);
        $this->load->view('recruiter/candidate_footer', @$data);
    }

    public function jobpreferences()
    {
        //$candidate_id =$_SESSION['candidate_id'];
        //$data['user_details']=$this->M_Candidate_profile->get_candidate_details($candidate_id);   
        $db_name1 = "sharksjob_backend";
        $this->db->query("use " .$db_name1. "");
        $data['recent_blogs'] = $this->M_blog->list_recent_blogs(4);

        //$candidate_id = $this->session->userdata["candidate_id"];
        $this->load->view('recruiter/msute_candidate_login_header', @$data);
        $this->load->view('recruiter/jobpreferences', @$data);
        $this->load->view('recruiter/candidate_footer', @$data);
    }

    public function blockcompany()
    {
        //$candidate_id =$_SESSION['candidate_id'];
        //$data['user_details']=$this->M_Candidate_profile->get_candidate_details($candidate_id);   
        $db_name1 = "sharksjob_backend";
        $this->db->query("use " .$db_name1. "");
        $data['recent_blogs'] = $this->M_blog->list_recent_blogs(4);

        //$candidate_id = $this->session->userdata["candidate_id"];
        $this->load->view('recruiter/msute_candidate_login_header', @$data);
        $this->load->view('recruiter/blockcompany', @$data);
        $this->load->view('recruiter/candidate_footer', @$data);
    }


}
?>