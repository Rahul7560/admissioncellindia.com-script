<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dewdrops Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>


<body id="page-top">


    <?php
        session_start();
        include "no.php";
        if (isset($_SESSION['user'])){ ?>




          <!-- Page Wrapper -->
          <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

              <!-- Sidebar - Brand -->
              <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                  <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dew Admin </div>
              </a>

              <!-- Divider -->
              <hr class="sidebar-divider my-0">

              <!-- Nav Item - Dashboard -->
              <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                  <i class="fas fa-fw fa-tachometer-alt "></i>
                  <span class="text-uppercase">Dashboard</span></a>
              </li>

              <!-- Divider -->
              <hr class="sidebar-divider">

              <!-- Heading -->
              <div class="sidebar-heading">
                Interface
              </div>

              <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                  aria-controls="collapseTwo">
                  <i class="fas fa-fw fa-cog"></i>
                  <span>Uploading</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="clguploading.php"> Upload College Data </a>
                  
                    <a class="collapse-item" href="search.php">  Upload Course Detail </a>
                    <a class="collapse-item " href="clglistview.php"> College list </a>
                    <a class="collapse-item " href="tele.php"> Tele calling upload </a>

                  </div>
                </div>
              </li>

              <!-- Nav Item - Utilities Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                  aria-expanded="true" aria-controls="collapseUtilities">
                  <i class="fas fa-fw fa-wrench"></i>
                  <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="#">Add Admins</a>

                  </div>
                </div>
              </li>

              <!-- Divider -->
              <hr class="sidebar-divider">




              <!-- Divider -->
              <hr class="sidebar-divider d-none d-md-block">

              <!-- Sidebar Toggler (Sidebar) -->
              <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
              </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

              <!-- Main Content -->
              <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar  mb-4 static-top shadow">

                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                  </button>

                  <h3 class=" text-secondary  m-auto">Dew Drops</h3>
                  <a href="logout.php" class=" btn btn-danger float-left  px-2 "  > 
                     logout
                  </a>






                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                  <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800  ">College Lists</h1>

                  </div>

                  <!-- Content Row -->
                  <div class="row justify-content-center mr-auto">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-5 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <a href="clglist.php?value=kerala" class="text-decoration-none">

                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 "><h4>Kerala</h4></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $nk ?></div>
                                    </div>
                                    <div class="col-auto">
                                    <i class="fa fa-graduation-cap fa-2x text-gray-800"></i>
                                    </div>
                                </div>
                             </a>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-5 col-md-6 mb-4">
                      <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <a href="clglist.php?value=karnataka" class="text-decoration-none">

                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1 "><h4>Karnataka</h4></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $nka ?></div>
                                    </div>
                                    <div class="col-auto">
                                    <i class="fa fa-graduation-cap fa-2x text-gray-800"></i>
                                    </div>
                                </div>
                             </a>
                        </div>
                      </div>
                    </div>


                    <div class="col-xl-5 col-md-6 mb-4 mt-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <a href="clglist.php?value=tamilnadu" class="text-decoration-none">

                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 "><h4>Tamilnadu</h4></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $nt ?></div>
                                    </div>
                                    <div class="col-auto">
                                    <i class="fa fa-graduation-cap fa-2x text-gray-800"></i>
                                    </div>
                                </div>
                             </a>
                        </div>
                      </div>
                    </div>


                    <div class="col-xl-5 col-md-6 mb-4 mt-4">
                      <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <a href="clglist.php?value=hyderabad" class="text-decoration-none">

                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1 "><h4>Hyderabad</h4></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $nh ?></div>
                                    </div>
                                    <div class="col-auto">
                                    <i class="fa fa-graduation-cap fa-2x text-gray-800"></i>
                                    </div>
                                </div>
                             </a>
                        </div>
                      </div>
                    </div>



                    <div class="col-xl-5 col-md-6 mb-4 mt-4 ">
                      <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <a href="clglist.php?value=complete" class="text-decoration-none">

                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1 "><h4>Complete list</h4></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $nc ?></div>
                                    </div>
                                    <div class="col-auto">
                                    <i class="fa fa-graduation-cap fa-2x text-gray-800"></i>
                                    </div>
                                </div>
                             </a>
                        </div>
                      </div>
                    </div>

                    



                    <!-- End of Main Content -->



                  </div>
                  <!-- End of Content Wrapper -->

                </div>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top   rounded" href="#page-top">
                  <i class="fas fa-angle-up"></i>
                </a>



        <?php 
        } else
        {
            header("location:index.php");
        }
        ?>

 



        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
       
        </script>

</body>

</html>