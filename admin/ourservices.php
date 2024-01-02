<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gbytes Admin</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="database/ourservices.js"></script>

  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
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
                  <h4 class="card-title">Our Services</h4>
                  <p class="card-description">
                  the "our services" section communicates the range of offerings provided by the company. This includes features such as property listings, search tools, and property management services. It serves as a concise guide for visitors, detailing how the company can assist with buying, selling, or managing properties. The section often emphasizes the expertise and specialization of the agency. Ultimately, the "our services" content aims to inform and attract potential clients by showcasing the value and comprehensive support offered by the real estate company.
                  </p> <br><br>

                  
                  <div class="forms-sample">
                    <b>Services One</b>
                    <div class="form-group">
                      <label for="exampleInputCity1">Title</label>
                      <input type="text" class="form-control spacepopup" id="sra" placeholder="Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Textarea</label>
                      <textarea class="form-control" id="sra_c" rows="20"></textarea>
                    </div>
                    <br><br>

                    <b>Services Two</b>
                    <div class="form-group">
                      <label for="exampleInputCity1">Title</label>
                      <input type="text" class="form-control" id="srb" placeholder="Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Textarea</label>
                      <textarea class="form-control" id="srb_c" rows="20"></textarea>
                    </div>
                    <br><br>

                    <b>Services three</b>
                    <div class="form-group">
                      <label for="exampleInputCity1">Title</label>
                      <input type="text" class="form-control" id="src" placeholder="Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Textarea</label>
                      <textarea class="form-control" id="src_c" rows="20"></textarea>
                    </div>
                    <br>

                    <button type="submit" id="create" class="btn btn-primary me-2">Save</button>
                  </div>
                </div>
              </div>
            </div>



          </div>



          
        </div>
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









<textarea name="" id="dataholder" style="width:100%; visibility:hidden;"></textarea>
  <script>

  $("#sra").val(ourservices.servicesA.title)
  $("#sra_c").val(ourservices.servicesA.content)
  $("#srb").val(ourservices.servicesB.title)
  $("#srb_c").val(ourservices.servicesB.content)
  $("#src").val(ourservices.servicesC.title)
  $("#src_c").val(ourservices.servicesC.content)







  $("#create").click(function(){

      ourservices.servicesA.title     = $("#sra").val().split('"').join('&#34;').split("'").join('&#39;').split('`').join('&#96;').split('$').join('&#36;').split('{').join('&#123;').split('}').join('&#125;').split('<').join('&#60;').split('>').join('&#62;').trim()
      ourservices.servicesB.title     = $("#srb").val().split('"').join('&#34;').split("'").join('&#39;').split('`').join('&#96;').split('$').join('&#36;').split('{').join('&#123;').split('}').join('&#125;').split('<').join('&#60;').split('>').join('&#62;').trim()
      ourservices.servicesC.title     = $("#src").val().split('"').join('&#34;').split("'").join('&#39;').split('`').join('&#96;').split('$').join('&#36;').split('{').join('&#123;').split('}').join('&#125;').split('<').join('&#60;').split('>').join('&#62;').trim()
      ourservices.servicesA.content   = $("#sra_c").val().split('"').join('&#34;').split("'").join('&#39;').split('`').join('&#96;').split('$').join('&#36;').split('{').join('&#123;').split('}').join('&#125;').split('<').join('&#60;').split('>').join('&#62;').trim()
      ourservices.servicesB.content   = $("#srb_c").val().split('"').join('&#34;').split("'").join('&#39;').split('`').join('&#96;').split('$').join('&#36;').split('{').join('&#123;').split('}').join('&#125;').split('<').join('&#60;').split('>').join('&#62;').trim()
      ourservices.servicesC.content   = $("#src_c").val().split('"').join('&#34;').split("'").join('&#39;').split('`').join('&#96;').split('$').join('&#36;').split('{').join('&#123;').split('}').join('&#125;').split('<').join('&#60;').split('>').join('&#62;').trim()


      $("#dataholder").val(`
let ourservices = {
    servicesA:{
        title:\`${ourservices.servicesA.title}\`,
        content:\`${ourservices.servicesA.content}\`
    },
    servicesB:{
        title:\`${ourservices.servicesB.title}\`,
        content:\`${ourservices.servicesB.content}\`
    },    
    servicesC:{
        title:\`${ourservices.servicesC.title}\`,
        content:\`${ourservices.servicesC.content}\`
    }
}
      `);


      $.post("database/ourservices.php",
        {
          datasave: `${$("#dataholder").val()}`,
          submit_ourservice:"sent"
        },

        function(data, status){
            $("#datacollector").val(null)
        });

  })



  

  </script>













<script>
    // Wait for the document to be ready
    $(document).ready(function(){
    // Attach an event listener to the input field
    $('.spacepopup').on('keydown', function(e){
      // Check if the pressed key is space (key code 32)
      if(e.keyCode === 32){
        // Display an alert with the input value (assuming you want to show the current value)
        alert($(this).val());
        // Prevent the default behavior of the space key (avoid adding a space to the input)
        e.preventDefault();
      }
    });
  });
</script>






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

