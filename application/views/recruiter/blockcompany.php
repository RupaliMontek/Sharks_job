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
        <li><a href="<?php echo base_url()?>settings/jobpreferences">Job Preferences</a></li>
        <li><a class="active" href="<?php echo base_url()?>settings/blockcompany">Block Companies</a></li>
      </ul>
    </div>
    </div>
     <div class="col-lg-9 col-md-9 col-12">
<div class="FrSettingLeftBlock">
<div class="FrSettingLeftBlockInn">
<h2>Block Companies</h2>
<p>Recruiters from companies blocked by you will not be able to see your profile on Sharksjob.</p>
<div class="forseperationnn"></div>
<div class="SettingAccountt">
<form class="col-lg-6 col-md-6 col-12 p-0 toggleformm">
        <input type="text" id="name" class="form-control" placeholder="Enter your full name">
        <div class="forseperationnn2"></div>
        <p><small>Profiles are hidden from current companies by default so that they don’t know when candidates search for a job.</small></p>
        <div class="d-flex gap-2">
          <button type="button" class="btn btn-primary cancelBtn" data-target="form1">Cancel</button>
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