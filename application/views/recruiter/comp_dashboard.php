<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid dashboardOuterrrr">
    <div class="container frCompDashboarddddD">
        <div class="frCompDashboarddddDTop">
            <div>
                <a class="frviewprImg" href="<?php echo base_url('job_post/view_profile') ?>" class="btn btn-secondary">
                    <img src="<?php echo base_url()?>frontend/images/profilePic.jpg" width="40px" height="40px">
                </a>
                <!--<a href="javascript:void(0);" class="btn btn-secondary" onclick="checkJobCountAndPost()">Post Job</a>-->

                <!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Postjobalertt">
  Post Job
</button>

 <!-- job post modal start here -->
<div class="modal fade" id="Postjobalertt" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        You have reached the maximum number of free job postings.<br>Please contact admin for paid posting.
      </div>
    </div>
  </div>
</div>
            <!-- job post modal end here -->
            </div>
            <form class="formShopSearch form-inline" id="searchForm"><br>
                <input class="form-control mr-sm-2" type="search" id="searchInput" placeholder="Search" aria-label="Search" required>
            </form>
        </div>
        
        <script>
            function checkJobCountAndPost() {
                var jobCount = <?php echo $jobCount; ?>;
                if (jobCount < 5) {
                    window.location.href = "<?php echo base_url('job_post/index/' . $this->session->userdata('user_admin_id')); ?>";
                } else {
                    alert('You have reached the maximum number of free job postings. Please contact admin for paid posting.');
                }
            }
        </script>

        <div class="row outerOfBox">
            <?php if (!empty($companyDataList) && is_array($companyDataList)) : ?>
                <?php foreach ($companyDataList as $jobData): ?>
                    <div class="col-md-4 mb-3 jobCard">
                        <div class="card mb-3 compBoxx">
                            <div class="card-body">
                                <div class="jobCardTop">
                                    <h5 class="card-title"><?= htmlspecialchars($jobData['profile']); ?></h5>
                                    <img src="<?php echo base_url()?>frontend/images/profilePic.jpg" width="50px" height="50px">
                                </div>
                                <div class="card-text frsalary">
                                    <strong></strong> <?= htmlspecialchars($jobData['comany_min_package_offer']); ?> &#8377; - <?= htmlspecialchars($jobData['comany_max_package_offer']); ?> &#8377;
                                </div>
                                <p class="card-text"><?= htmlspecialchars($jobData['key_skills']); ?></p>
                                <p class="card-text"><?= htmlspecialchars($jobData['min_exp_candidate']); ?> - <?= htmlspecialchars($jobData['max_exp_candidate']); ?> years Experience</p>
                                <p class="card-text">
                                    <span class="jobdescccc">
                                        <?= strlen(strip_tags($jobData['job_descriptions'])) > 100 ? htmlspecialchars(substr(strip_tags($jobData['job_descriptions']), 0, 100)) . '...' : htmlspecialchars(strip_tags($jobData['job_descriptions'])); ?>
                                    </span>
                                </p>
                                <div class="jobCardBottom">
                                    <a href="<?= site_url('job_post/view_applications/' . $jobData['job_id']); ?>" class="btn btn-info">Check Candidates Applications</a>
                                    <p class="card-text"><strong>Posted on</strong><br> <?= htmlspecialchars(date('Y-m-d', strtotime($jobData['created_at']))); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No job postings found for this company.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#searchInput').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('.jobCard').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
