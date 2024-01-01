<?php
    $fullPath = $_SERVER['PHP_SELF']; // or $_SERVER['SCRIPT_FILENAME']
    $filename = pathinfo($fullPath, PATHINFO_FILENAME);

    if ($filename == "admin") {
        $filename = "";
    }

    if ($filename == "ourservices") {
        $filename = "Our Services";
    }

    if ($filename == "profile") {
        $filename = "Profile";
    }

    
?>







<div class="row">
<div class="col-md-12 grid-margin">


              <div class="d-flex justify-content-between flex-wrap">

                <div class="d-flex align-items-end flex-wrap">
                  <div class="me-md-3 me-xl-5">
                    <h2>CDO Property K</h2>
                    <p class="mb-md-0">    </p>
                  </div><br>

                </div>

                
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-plus text-muted"></i>
                  </button>
                  <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
                </div>
              </div>
    </div>
</div>

<div class="d-flex" style="margin-bottom:10px; margin-left:15px;">
  <a href="../"><i class="mdi mdi-home text-muted hover-cursor"></i></a>
  <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;<a href="admin.php">Dashboard</a>&nbsp;/&nbsp;</p>
  <p class="text-primary mb-0 hover-cursor"><?php echo $filename; ?></p>
</div>