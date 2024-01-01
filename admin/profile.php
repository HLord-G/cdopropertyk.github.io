<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gbytes Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jsSHA/2.0.2/sha.js"></script> -->
  <script src="database/personal.js"></script>

  
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

</head>
<body>
  <div class="container-scroller">


    <?php include "component/header_popup.php"; ?>
    
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown me-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
              <i class="mdi mdi-message-text mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown me-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name">Louis Barnett</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>




    <!-- partial -->
    <div class="container-fluid page-body-wrapper">





      <!-- partial:partials/_sidebar.html -->
    <?php include "component/sidebar.php"; ?>











      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          

        <?php include "component/header.php"; ?>




    <div class="row">


        <div class="col-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">

    <h4 class="card-title"><b>Profile</b></h4>

        <p class="card-description">
            the "profile" is a section that introduces the individuals or organization operating the site. It provides key details about the real estate company, its founders, and relevant background information, fostering transparency and building trust. This profile enhances credibility by offering insights into the company's history, mission, values, and the expertise of its team in the real estate industry.
        </p>

                
    <div class="forms-sample">


        <div class="form-group">
            <label for="exampleInputName1">Site Name</label>
            <input type="text" class="form-control" id="sitename" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputName1">Username</label>
            <input type="text" value="admin" id="username" class="form-control" id="exampleInputName1" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword4">Password</label>

            <div id="passwordwarning"></div>

            <input type="password" class="form-control" onkeyup="checkPasswordMatch()" id="password" value="kxv893d4sd" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword4">Confirm Password</label>
            <input type="password" value="kxv893d4sd" onkeyup="checkPasswordMatch()" id="passwordcon" class="form-control" placeholder="Confirm Password">
        </div>

        <br><br><br>
        <h4 class="card-title"><b>Personal Info</b></h4>

        
        <hr>

        <div class="form-group">
            <label for="exampleInputName1">First Name</label>
            <input type="text" class="form-control" id="firstname" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="exampleInputName1">Last Name</label>
            <input type="text" class="form-control" id="lastname" placeholder="Name">
        </div>


        <div class="form-group">
            <label for="exampleInputEmail3">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail3">Phone Number</label>
            <input type="email" class="form-control" id="phone" placeholder="Phone Number">
        </div>

 
        <div class="form-group">
            <label for="exampleInputCity1">Location</label>
            <input type="text" class="form-control" id="location" placeholder="Location">
        </div>

        <div class="form-group">
            <label for="exampleTextarea1">Contact Info</label>
            <div>

            <button style="margin-bottom:5px;" class="btn btn-primary btn-sm" onclick="execCmd('bold')"><i class="mdi mdi-format-bold"></i></button>
            <button style="margin-bottom:5px;" class="btn btn-primary btn-sm " onclick="execCmd('italic')"><i class="mdi mdi-format-italic"></i></button>
            <button style="margin-bottom:5px;" class="btn btn-primary btn-sm" onclick="execCmd('underline')"><i class="mdi mdi-format-underline"></i></button>

            
            <button style="margin-bottom:5px;" class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-format-size"></i></button>
            <div class="dropdown-menu" style="">
                <button class="dropdown-item" onclick="execCmd('fontSize','1')">   x-Small   </button>
                <button class="dropdown-item" onclick="execCmd('fontSize','2')">   Small     </button>
                <button class="dropdown-item" onclick="execCmd('fontSize','3')">   Regular   </button>
                <button class="dropdown-item" onclick="execCmd('fontSize','4')">   Medium    </button>
                <button class="dropdown-item" onclick="execCmd('fontSize','5')">   Large     </button>
                <button class="dropdown-item" onclick="execCmd('fontSize','6')">   x-Large   </button>
                <button class="dropdown-item" onclick="execCmd('fontSize','7')">   xx-Large  </button>
            </div>

            <button style="margin-bottom:5px;" class="btn btn-primary btn-sm" onclick="execCmd('insertUnorderedList')"><i class="mdi mdi-format-list-bulleted"></i></button>
            </div>
            <div class="form-control" contenteditable="true" id="contectinfo" rows="4">
            Contact More Info
            <br><br><br><br><br><br>
            </div>
        </div>


        <br><br><br><br><br>
        <h4 class="card-title"><b>Social Media Link</b></h4>
        <hr>

        <div id="socialwarning_f"></div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-white"><i class="mdi mdi-facebook-box icon-md"></i> </span>
                </div>

                <input type="text" id="facebooklink" onkeyup="checkFacebookLink()" class="form-control" placeholder="Facebook Link" aria-label="Amount (to the nearest dollar)">
    
            </div>
        </div>
        <div id="socialwarning_t"></div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-white"><i class="mdi mdi-instagram icon-md"></i> </span>
                </div>
                <input type="text" id="twitterlink" onkeyup="checktwitterLink()" class="form-control" placeholder="Instagram Link" aria-label="Amount (to the nearest dollar)">
    
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-white"><i class="mdi mdi-window-close icon-md"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Twitter Link" aria-label="Amount (to the nearest dollar)">
    
            </div>
        </div>

        <br><br><br><br><br>
        <h4 class="card-title"><b>Website info</b></h4>

        <hr>


        <div class="form-group">
              <label for="exampleInputCity1">About Header </label>
              <input type="text" class="form-control"  id="aboutheader" placeholder="About Header">
          </div>


        <div class="form-group">
            <label for="exampleTextarea1">About</label>
            <div>

            <button style="margin-bottom:5px;" class="btn btn-primary btn-sm" onclick="execCmd('bold')"><i class="mdi mdi-format-bold"></i></button>
            <button style="margin-bottom:5px;" class="btn btn-primary btn-sm " onclick="execCmd('italic')"><i class="mdi mdi-format-italic"></i></button>
            <button style="margin-bottom:5px;" class="btn btn-primary btn-sm" onclick="execCmd('underline')"><i class="mdi mdi-format-underline"></i></button>

            
            <button style="margin-bottom:5px;" class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-format-size"></i></button>
            <div class="dropdown-menu" style="">
                <button class="dropdown-item" onclick="execCmd('fontSize','1')">   x-Small   </button>
                <button class="dropdown-item" onclick="execCmd('fontSize','2')">   Small     </button>
                <button class="dropdown-item" onclick="execCmd('fontSize','3')">   Regular   </button>
                <button class="dropdown-item" onclick="execCmd('fontSize','4')">   Medium    </button>
                <button class="dropdown-item" onclick="execCmd('fontSize','5')">   Large     </button>
                <button class="dropdown-item" onclick="execCmd('fontSize','6')">   x-Large   </button>
                <button class="dropdown-item" onclick="execCmd('fontSize','7')">   xx-Large  </button>
            </div>

            <button style="margin-bottom:5px;" class="btn btn-primary btn-sm" onclick="execCmd('insertUnorderedList')"><i class="mdi mdi-format-list-bulleted"></i></button>
            </div>
            <div class="form-control" contenteditable="true" id="aboutinfo" rows="4">
            About This Website
            <br><br><br><br><br><br>
            </div>
        </div>

        <div class="form-group">
        <label>Upload Profile</label>
            <div class="input-group col-xs-12">
            <input type="file" name="img[]" id="profileimage" class="form-control file-upload-info"   placeholder="Upload Image"  accept="image/*">
            <span class="input-group-append">
            </span>
            </div>
        </div>
        <br>

        <div class="form-group">
        <label>Upload Cover Image</label>
            <div class="input-group col-xs-12">
            <input type="file" name="img[]" id="imagecover" class="form-control file-upload-info"   placeholder="Upload Image"  accept="image/*">
            <span class="input-group-append">
            </span>
            </div>
        </div>
    <br><br>





        <div class="form-group">
                <label for="exampleInputCity1">You Start Sinse? </label>
                <input type="text" class="form-control"  id="sences" placeholder="Year">
        </div>

        
        <div class="form-group">
                <label for="fe">Work tag?</label>
                <input type="text" class="form-control" value="Real Estate" id="taggs" placeholder="tag">
        </div>




        <button type="submit" id="createdata" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
    </div>
            

                </div>
            </div>
        </div>


        </div>

    </div>

    <script>
        function execCmd(command, value = null) {
            document.execCommand(command, false, value);
        }
    </script>
    <script>




    </script>


<textarea name="" id="datacollector" row="50" style="width:100%; visibility:hidden; padding:20px;"></textarea>



        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
      <?php include "component/footer.php";?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->





  <script src="js/personal.js"></script>
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->

  <script src="js/jquery.cookie.js" type="text/javascript"></script>
</body>


</html>

