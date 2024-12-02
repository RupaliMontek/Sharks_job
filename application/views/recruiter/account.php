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
        <li><a class="active" href="<?php echo base_url()?>settings/account">Account</a></li>
        <li><a href="<?php echo base_url()?>settings/jobpreferences">Job Preferences</a></li>
        <li><a href="<?php echo base_url()?>settings/blockcompany">Block Companies</a></li>
      </ul>
    </div>
    </div>
     <div class="col-lg-9 col-md-9 col-12">
<div class="FrSettingLeftBlock">
<div class="FrSettingLeftBlockInn">
<h2>Account Settings</h2>
<small>Change your email, mobile number or password.</small>
<div class="forseperationnn"></div>
<div class="SettingAccountt">
<h6>Email Address</h6>
<p>test29@gmail.com</p>
<a href="#" class="toggleLink" data-target="form1">Change Email</a>
<div id="form1" class='hidden' style="display: none;">
   <form class="col-lg-6 col-md-6 col-12 p-0 toggleformm">
    <h6>Change Email</h6>
    <p>We will send you a verification email on this email ID</p>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="d-flex gap-2">
          <button type="button" class="btn btn-primary cancelBtn" data-target="form1">Cancel</button>
          <button type="submit" class="btn btn-primary">Save</button>

        </div>
      </form>
</div>

<h6>Mobile No.</h6>
<a href="#" class="toggleLink" data-target="form2">+91 1234567890 <i class="fa fa-pencil"></i></a>
<div id="form2" class='hidden' style="display: none;">
   <form class="col-lg-6 col-md-6 col-12 p-0 toggleformm">
        <div class="mb-3">
          <input type="email" class="form-control" id="email" placeholder="Enter Mobile No.">
        </div>
        <div class="d-flex gap-2">
          <button type="button" class="btn btn-primary cancelBtn" data-target="form2">Cancel</button>
          <button type="submit" class="btn btn-primary">Save</button>

        </div>
      </form>
</div>

<h6>Password</h6>
<a href="#" class="toggleLink" data-target="form3">Change Password</a>
<div id="form3" class='hidden' style="display: none;">
 
        <!-- Change Password Link -->

<!-- Change Password Form -->
     <form class="col-lg-6 col-md-6 col-12 p-0 toggleformm">
      <div class="mb-3">
        <p>Your password should be at least 6 characters long and contain alphanumeric characters (a-z and 0-9)</p>
      </div>
        <div class="mb-3">
          <label for="currentPassword" class="form-label">Current Password<span class="requiree">*</span></label>
          <input type="password" class="form-control" id="currentPassword" placeholder="Enter your current password">
        </div>
        <div class="mb-3">
          <label for="newPassword" class="form-label">New Password<span class="requiree">*</span></label>
          <input type="password" class="form-control" id="newPassword" placeholder="Enter your new password">
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirm New Password<span class="requiree">*</span></label>
          <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your new password">
        </div>
        <div class="d-flex gap-2">
          <button type="button" class="btn btn-primary cancelBtn" data-target="form3">Cancel</button>
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