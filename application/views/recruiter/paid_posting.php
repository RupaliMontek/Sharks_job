<style>
    .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<?php if ($this->session->flashdata('success')): ?>
    <script>
        $(document).ready(function() {
            toastr.success('<?php echo $this->session->flashdata('success'); ?>', 'Success');
        });
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
    <script>
        $(document).ready(function() {
            toastr.error('<?php echo $this->session->flashdata('error'); ?>', 'Error');
        });
    </script>
<?php endif; ?>
<div style="display:none;">
<div class="container mt-5">
    <p style="text-align: center; font-weight: 700;">Plase contact to Admin for further process<br>
    <!--<button style="margin-top: 20px; background:#135da8;border: none;border-radius: 5px; color: #fff; text-align:center;padding:1px 20px; line-height: 35px;">Check Here</button>-->
</p>
</div>
<h4 class="text-center">OR</h4>
<div class="container mt-5">
    <p style="text-align: center; font-weight: 700;">Click here for payment<br>
    <button style="margin-top: 20px; background:#135da8;border: none;border-radius: 5px; color: #fff; text-align:center;padding:1px 20px; line-height: 35px;">Check Here</button>
</p>
</div>
</div>
<div class="container mt-5">
    <h4>Pricing Plans For Everyone</h4>
    <p>No surprise fees. Cancel anytime.</p>
    Monthly<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
Yearly
<label class="switch">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>
</div>
<div class="container mt-5">
    <div class="row">
    <div class="col-md-4 col-lg-4 col-sm-12">
        <h2>Starter Plan<br>
        $0.99 /Month</h2>
        <ul>
            <li>One</li>
            <li>One</li>
            <li>One</li>
            <li>One</li>
            <li>One</li>
            <li>One</li>
            <li>One</li>
        </ul>
        <a href="#">Chooese Plan </a>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-12">
        <h2>Starter Plan<br>
        $0.99 /Month</h2>
        <ul>
            <li>One</li>
            <li>One</li>
            <li>One</li>
            <li>One</li>
            <li>One</li>
            <li>One</li>
            <li>One</li>
        </ul>
        <a href="#">Chooese Plan </a>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-12">
        <h2>Starter Plan<br>
        $0.99 /Month</h2>
        <ul>
            <li>One</li>
            <li>One</li>
            <li>One</li>
            <li>One</li>
            <li>One</li>
            <li>One</li>
            <li>One</li>
        </ul>
        <a href="#">Chooese Plan </a>
        </div>
    </div>
</div>