<div class="container-fluid settingsBanner"></div>
<div class="container servicesContentSection">
       <h1>Settings</h1>
      <div class="frSettingsTop">
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  </div>
  <div class="row">
    <div class="col-lg-3 col-md-3 col-12">
      <div class="settingsRightSide">
      <ul>
        <!-- <li><a href="#">Communication and Privacy<a></li> -->
        <li><a href="<?php echo base_url()?>settings/account">Account</a></li>
        <li><a class="active" href="<?php echo base_url()?>settings/jobpreferences">Job Preferences</a></li>
        <li><a href="<?php echo base_url()?>settings/blockcompany">Block Companies</a></li>
      </ul>
    </div>
    </div>
     <div class="col-lg-9 col-md-9 col-12">
<div class="FrSettingLeftBlock">
<div class="FrSettingLeftBlockInn">
<h2>Job Preferences</h2>
<p>Sharksjob would show the recommendation basis on your job preferences mentioned in your job profile. Editing it would also change your desired career profile.</p>
<div class="forseperationnn"></div>
<div class="SettingAccountt">

<h6>Preferred Work Location(Maximum 10)</h6>
<a href="#" class="toggleLink" data-target="form4">Pune <i class="fa fa-pencil"></i></a>
<div id="form4" class='hidden' style="display: none;">
   <form class="col-lg-6 col-md-6 col-12 p-0 toggleformm">
    <div class="mb-3">
      <select class="form-select" id="">
        <option selected>Select Location</option>
        <option value="1">Mumbai</option>
        <option value="2">Delhi</option>
        <option value="3">Bangalore</option>
        <option value="4">Chennai</option>
        <option value="5">Hyderabad</option>
        <option value="6">Pune</option>
        <option value="7">Kolkata</option>
        <option value="8">Ahmedabad</option>
      </select>
    </div>
        <div class="d-flex gap-2">
          <button type="button" class="btn btn-primary cancelBtn" data-target="form4">Cancel</button>
          <button type="submit" class="btn btn-primary">Save</button>

        </div>
      </form>
</div>

<h6>Expected Salary (Annual)</h6>
<a href="#" class="toggleLink" data-target="form5">Add Salary</a>
<div id="form5" class='hidden' style="display: none;">
   <form class="col-lg-6 col-md-6 col-12 p-0 toggleformm">
      <!-- Expected Salary Input -->
      <div class="input-group mb-4 forsalaryyy">
         <select class="form-select" id="">
        <option selected>₹</option>
        <option value="1">$</option>
      </select>
        <input type="text" class="form-control" placeholder="Eg. 4,50,000">
      </div>
        <div class="d-flex gap-2">
          <button type="button" class="btn btn-primary cancelBtn" data-target="form5">Cancel</button>
          <button type="submit" class="btn btn-primary">Save</button>

        </div>
      </form>
    </div>

</div>

</div>
</div>
</div>
</div>
</div>

</div>
       
     </div>
  </div>
  </div>
  <!-- <script type="text/javascript">function toggler(divId) {
    $("#" + divId).toggle();
}</script> -->
<script type="text/javascript">
  $(document).ready(function () {
      // Handle link click to show/hide corresponding form
      $(".toggleLink").on("click", function (e) {
          e.preventDefault(); // Prevent default link behavior
          var targetId = $(this).data("target"); // Get the target form's ID
          $("#" + targetId).show(); // Show the corresponding form
          $(this).hide(); // Hide the clicked link
      });

      // Handle cancel button to hide form and show link again
      $(".cancelBtn").on("click", function () {
          var targetId = $(this).data("target"); // Get the target form's ID
          $("#" + targetId).hide(); // Hide the corresponding form
          $(".toggleLink[data-target='" + targetId + "']").show(); // Show the associated link
      });
  });
</script>