<div class="container-fluid innerpagecontainer"> 
<div class="container searchfilter"> 
    <div class="row">
        <div class="col-lg-3 col-sm-12 jobsearchfilterouter">
            <div class="jobFilterLeft">
                <h6>All Filters <span><a href="#"><!-- Applied (2) --></a></span></h6>
<div class="line"></div>
                <!-- workmode start here -->
                <div class="workmode">
                    <h6>Work Mode</h6>
                    <div class="chckBoxCont">
         <input onclick="filters_all_ajax()" type="checkbox" id="work_mode" name="work_mode" value="Work from office">
        <label class="" for="">
            <p class="">
                <span class="" title="Work from office">Work from office</span>
                <span class=""></span></p></label>
    </div>

    <div class="chckBoxCont">
        <input onclick="filters_all_ajax()" type="checkbox" id="work_mode" name="work_mode" value="Hybrid">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Hybrid</span>
                <span class=""></span></p></label>
    </div>

    <div class="chckBoxCont">
        <input onclick="filters_all_ajax()" type="checkbox" id="work_mode" name="work_mode"  value="Remote / WFH">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Remote / WFH</span>
                <span class=""></span></p></label>
    </div>
</div>

                <!-- workmode end here -->

                 <div class="line"></div>

                <!-- experience --->
                <script type="text/javascript">
                    
                    function displaySliderValue(eSlider){   
    eSlider.parentElement.querySelector('span').textContent = eSlider.value+' '+'Yrs';
}
                </script>

                <div class="workmode">
    <h6>Experience</h6>
     <div class="list-group">                   
                    <input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="65000" />                    
                    <div id="price_range"></div>
                    <p id="price_show">0 - 30</p>
                </div>  
     </div>

                <!-- experience end here -->

                <!-- department start here -->
                <div class="line"></div>
                <div class="departmentt">
                    <h6>Department</h6>
                    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Engineering - Software & QA</span>
                <span class="">(724)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">UX, Design & Architecture</span>
                <span class="">(7)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Marketing & Communication</span>
                <span class="">(24)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Other</span>
                <span class="">(20)</span></p></label>
    </div>

<!-- modal box click on view more start here  -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewdepartment">
  View More
</button>

<!-- Modal -->
<div class="modal fade fordepartmentmodal" id="viewdepartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Department</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
<?php foreach ($departments as $row) { ?>
<div class="chckBoxCont">
        <input type="checkbox" id="<?php $row->dept_id; ?>">
        <label class="" for="">
            <p class=""><span class="" title="Work from office"><?php echo $row->dept_name; ?></span>
                <span class="">(724)</span></p></label>
</div>
<?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Apply</button>
      </div>
    </div>
  </div>
</div>
<!-- modal box click on view more end here  -->

                </div>

                <!-- department end here -->

                <!-- salary start here -->
                <div class="line"></div>
                <div class="forsalaryy">
                    <h6>Salary</h6>
    <div class="chckBoxCont">
        <input type="checkbox" value="0-3" name="salary" id="salary">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">0-3 Lakhs</span>
            <span class="">(724)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">3-6 Lakhs</span>
                <span class="">(7)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">6-10 Lakhs</span>
                <span class="">(24)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">10-15 Lakhs</span>
                <span class="">(20)</span></p></label>
    </div>

<!-- modal box click on view more start here  -->
 <!-- Button trigger modal Location -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewmoresalary">
  View More
</button>

<!-- Modal -->
<div class="modal fade forsalarymodal" id="viewmoresalary" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Salary</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <nav class="navbar navbar-light">
  <form class="form-inline leftbarsearchform">
    <input class="form-control mr-sm-2" type="search" placeholder="Search Department" aria-label="Search">
    <button class="btn searchiconn" type="submit"><i class="fa fa-search"></i></button>
  </form>
</nav>
          <div class="chckBoxCont">
        <input type="checkbox" value="0-3" id="salary" name="salary">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">0-3 Lakhs</span>
                <span class="">(724)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" value="3-6" id="salary" name="salary" >
        <label class="" for="">
            <p class=""><span class="" title="Work from office">3-6 Lakhs</span>
                <span class="">(7)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="salary" name="salary" value="6-10">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">6-10 Lakhs</span>
                <span class="">(24)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="salary" name="salary" value="10-15">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">10-15 Lakhs</span>
                <span class="">(20)</span></p></label>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="filters_all_ajax()" class="btn btn-primary">Apply</button>
      </div>
    </div>
  </div>
</div>
<!-- modal box click on view more end here  -->

                </div>

                <!-- salary end here -->


                <!-- salary start here -->
                <div class="line"></div>
                <div class="companytypee">
                    <h6>Company Type</h6>
                    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Corporate</span>
                <span class="">(724)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Foreign MNC</span>
                <span class="">(7)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Indian MNC</span>
                <span class="">(24)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Startup</span>
                <span class="">(20)</span></p></label>
    </div>

<!-- modal box click on view more start here  -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewcompanytype">
  View More
</button>

<!-- Modal -->
<div class="modal fade forcompanytypemodal" id="viewcompanytype" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Company Type</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Corporate</span>
                <span class="">(724)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Foreign MNC</span>
                <span class="">(7)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Indian MNC</span>
                <span class="">(24)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Startup</span>
                <span class="">(20)</span></p></label>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Apply</button>
      </div>
    </div>
  </div>
</div>
<!-- modal box click on view more end here  -->

                </div>

                <!-- salary end here -->

                <!-- salary start here -->
                 <div class="line"></div>
                <div class="rolecategoryy">
                    <h6>Role Category</h6>
                    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Software Developer</span>
                <span class="">(724)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Other Design</span>
                <span class="">(7)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Digital Marketing</span>
                <span class="">(24)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Other</span>
            <span class="">(20)</span></p></label>
    </div>

    <!-- modal box click on view more start here  -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewrolecategory">
  View More
</button>

<!-- Modal -->
<div class="modal fade forrolecategorymodal" id="viewrolecategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Role Category</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Software Developer</span>
                <span class="">(724)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Other Design</span>
                <span class="">(7)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Digital Marketing</span>
                <span class="">(24)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Other</span>
            <span class="">(20)</span></p></label>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Apply</button>
      </div>
    </div>
  </div>
</div>
<!-- modal box click on view more end here  -->
                </div>

                <!-- salary end here -->

                <!-- education start here -->
                <div class="educationnn">
                    <div class="line"></div>
                    <h6>Education</h6>
<form  method="post">
<?php $sliced_array = array_slice($educations, 0, 4); ?>
<?php foreach ($sliced_array as $row) { ?>
<div class="chckBoxCont">
    <input type="checkbox" id="education_filter" name="education_filter" value="<?php echo $row->course_id; ?>" onclick="filters_all_ajax()"                >
    <label class="" for="">
    <p class=""><span class="" title="Work from office"><?php echo $row->course_name; ?></span>
    <span class="">(724)</span></p></label>
</div> 
<?php } ?>
</form>

    <!-- modal box click on view more start here  -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vieweducation">
  View More
</button>

<!-- Modal -->
<div class="modal fade foreducationmodal" id="vieweducation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
<!-- <form action="<?php echo base_url(); ?>recruitment/locations_education" method="post"> -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Education</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<?php foreach ($educations as $row) { ?>
<div class="chckBoxCont">
    <input type="checkbox" id="education_filter" name="education_filter" value="<?php echo $row->course_id; ?>"  >
    <label class="" for="">
    <p class=""><span class="" title="Work from office"><?php echo $row->course_name; ?></span>
    <span class="">(724)</span></p></label>
</div> 
<?php } ?>

      </div>
      <div class="modal-footer">
        <button onclick="filters_all_ajax()" type="button" class="btn btn-primary">Apply</button>
      </div>
    </div>
<!-- </form> -->
  </div>
</div>
<!-- modal box click on view more end here  -->
                </div>

                <!-- education end here -->


                <!-- Posted by start here -->
                 <div class="line"></div>
                <div class="workmode">
                    <h6>Posted By</h6>
                   
                    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Company Jobs</span>
                <span class="">(724)</span></p></label>
    </div>

    <div class="chckBoxCont">
        <input type="checkbox" id="">
        <label class="" for="">
            <p class=""><span class="" title="Work from office">Consultant Jobs</span>
                <span class="">(7)</span></p></label>
    </div>
</div>
<!-- posted by end here -->
<!-- Top Companies start here -->
<div class="Topcompanyss">
<div class="line"></div>
<h6>Top Companies</h6>
<form  method="post">
<?php $sliced_array = array_slice($companies, 0, 4); ?>
   <?php foreach ($sliced_array as $row) { ?>  
<div class="chckBoxCont">
    <input onclick="filters_all_ajax()" type="checkbox" id="companies" name="companies" value="<?php echo $row->client_id; ?>">
    <label class="" for="">
    <p class=""><span class="" title="Work from office"><?php echo $row->client_name; ?></span>
    <span class="">(724)</span></p></label>
</div>
<?php } ?>
</form>
<!-- modal box click on view more start here  -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#vietopCompanies">
  View More
</button>

<!-- Modal -->
<div class="modal fade fortopCompaniesmodal" id="vietopCompanies" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!-- <form action="<?php echo base_url(); ?>recruitment/filter_company" method="post"> -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Top Companies</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-body">
        <?php foreach ($companies as $row) { ?>
<div class="chckBoxCont">
    <input type="checkbox" id="companies" name="companies" value="<?php echo $row->client_id; ?>">
    <label class="" for="">
    <p class=""><span class="" title="Work from office"><?php echo $row->client_name; ?></span>
    <span class="">(724)</span></p></label>
</div> 
<?php } ?>

      </div>

      </div>
      <div class="modal-footer">
        <button type="button" onclick="filters_all_ajax()" class="btn btn-primary">Apply</button>
      </div>
    </div>
<!-- </form> -->
  </div>
</div>
<!-- modal box click on view more end here  -->
                </div>

                <!-- Top Companies end here -->


                <!-- Top Companies start here -->
                <div class="locationn">
                    <div class="line"></div>
<h6>Location</h6>
<form  method="post">
<?php $sliced_array = array_slice($cities, 0, 4); ?>
  <?php foreach ($sliced_array as $row) { ?>                   
    <div class="chckBoxCont">
     
        <input id="location" name="location" type="checkbox" value="<?php echo $row->id; ?>" onclick="filters_all_ajax()"  >
        <label class="" for="">
            <p class=""><span class="" title="Work from office"><?php echo $row->name; ?></span>
                <span class=""></span></p></label>      
    </div>
     <?php } ?>
 </form>
<!-- modal box click on view more start here  -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewlocation">
  View More
</button>

<!-- Modal -->
<div class="modal fade forlocationmodal" id="viewlocation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!-- <form action="<?php echo base_url(); ?>recruitment/locations_filter" method="post"> -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Location</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php foreach ($cities as $row) { ?>
     <div class="chckBoxCont">     
        <input id="location" name="location" type="checkbox" value="<?php echo $row->id; ?>">
        <label class="" for="">
            <p class=""><span class="" title="Work from office"><?php echo $row->name; ?></span>
        <span class=""></span></p></label>      
    </div>
     <?php } ?>  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" onclick="filters_all_ajax()">Apply</button>
      </div>
    </div>
<!-- </form> -->


  </div>
</div>
<!-- modal box click on view more end here  -->

                </div>

                <!-- Top Companies end here -->
            </div>
        </div>
        
        <div id="job_filtersssss" class="hidden"></div>
        <div id="job_filters" class="col-lg-6 col-sm-12 jobFilterMiddle">
            <?php if (!empty($job_latest)) { ?>    
                    <?php foreach ($job_latest as $row) { ?>
                    <a href="<?php echo base_url(); ?>recruitment/job_description/<?php echo $row->job_id; ?>">
                        
                    <div class="jobprofileshort">
                        <div class="jobprofileshortTop">
                            
                      <?php
if ($row->company_name) {
    // Fetch the company details based on company_name
    $query = $this->db->query("SELECT * FROM client WHERE client_id = $row->company_name");
    $company_details = $query->row();

    // Check if the company details and logo are valid
    if (isset($company_details->client_logo) && !empty($company_details->client_logo)) {
        // Check if the logo file exists on the server before displaying it
        $logo_path = base_url($company_details->client_logo);
        if (@getimagesize($logo_path)) {
            // Only render the <img> tag if the file exists
            echo '<img width="70" height="auto" src="' . $logo_path . '" alt="Company Logo" />';
        }
    }
}
?>
 
                          <h4><?php echo $row->profile; ?></h4>
                        <div class="compname_review">
                        <?php  
                        if($row->company_name)
                        {
                           echo $company_details->client_name;
                           
                        }?>
                        <span class="star"><i class="fa fa-star"></i>3.9</span>  <span class="frreview">9 Reviews</span></div>
                    </div>
                           <div class="jobdetails"> <i class="fa fa-briefcase"></i><?php echo $row->min_exp_candidate .
                               "-" .
                               $row->max_exp_candidate .
                               " Yrs"; ?>  | <i class="fa fa-inr"></i> Not disclosed |  <i class="fa fa-map-marker"></i><?php echo $row->name; ?></div>
                           <p><?php echo substr(
                               $row->job_descriptions,
                               0,
                               100
                           ); ?>...</p>
                            <?php
                            $array = $row->key_skills;
                            $button = explode(",", $array);
                            ?>
                                        <?php foreach ($button as $btn) { ?>
                                          <button style="font-size:16px" type="button" class="btn btn-light-blue btn-sm"><?php echo $btn; ?></button>
                                        <?php } ?>                          
                        <div class="jobdetails_bottom">
               <i class="fa fa-history" aria-hidden="true"></i><span><?php
               $diff = abs(
                   strtotime($row->created_at) - strtotime(date("Y-m-d h:i:s"))
               );
               $years = floor($diff / (365 * 60 * 60 * 24));
               $months = floor(
                   ($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24)
               );
               $days = floor(
                   ($diff -
                       $years * 365 * 60 * 60 * 24 -
                       $months * 30 * 60 * 60 * 24) /
                       (60 * 60 * 24)
               );
               echo $days . " DAY AGO";
               ?></span><span class="right"><i class="fa fa-bookmark"></i>Save</span>
            </div>

                </div>
                 </a>
            <?php }} ?>
           
        </div>
       
        <div class="col-lg-3 col-sm-12">
             <div  id="job_filter"></div>
            <div class="jobFilterRight">

                    <div class="featuredCompanies">
                        
                        <h6>See jobs in featured companies</h6>
                        <marquee width="60%" direction="down" height="auto" scrollamount="3">
                        <img src="<?php echo base_url(); ?>frontend/images/complogo.png"/>
                        <img src="<?php echo base_url(); ?>frontend/images/complogo.png"/>
                        <img src="<?php echo base_url(); ?>frontend/images/complogo.png"/>
                        <img src="<?php echo base_url(); ?>frontend/images/complogo.png"/>
                        <img src="<?php echo base_url(); ?>frontend/images/complogo.png"/>
                        <img src="<?php echo base_url(); ?>frontend/images/complogo.png"/>
                        <img src="<?php echo base_url(); ?>frontend/images/complogo.png"/>
                        <img src="<?php echo base_url(); ?>frontend/images/complogo.png"/>
                        </marquee>
                    </div>
            </div>

             <div class="jobFilterRight">
                <h6>Advertisement Section</h6>
                <img width="90%" src="<?php echo base_url(); ?>frontend/images/complogo.png"/>
             </div>

              <div class="jobFilterRight">
                <h6>Filter Jobs By Location</h6>
                <ul>
                    <li><a>Pune<span>120 Jobs</span></a></li>
                    <li><a>Mumbai<span>180 Jobs</span></a></li>
                    <li><a>Banglore<span>210 Jobs</span></a></li>
                    <li><a>Chennai<span>310 Jobs</span></a></li>
                </ul>
             </div>


        </div>
    </div>
</div>
</div>

<script>
    $(document).ready(function(){
    $("#filterform").on("change", "input:checkbox", function(){
        $("#filterform").submit();z
    });
});


</script>