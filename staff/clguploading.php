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
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php
        session_start();
        if (isset($_SESSION['user'])){
          
      
        

        ?>


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
                <i class="fas fa-fw fa-tachometer-alt"></i>
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
                  <a class="collapse-item" href="clguploading.php">College data uploading</a>
                  
                  <a class="collapse-item" href="search.php">  Upload Course detail </a>
                  <a class="collapse-item " href="clglistview.php"> College list </a>
                  <a class="collapse-item " href="tele.php"> Tele calling Data Upload </a>


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

                <h3 class=" text-secondary m-auto">Dew Drops</h3>
                <a href="logout.php" class=" btn btn-danger float-left  px-2 "  > 
                     logout
                </a>






              </nav>
              <!-- End of Topbar -->

              <!-- Begin Page Content -->
              <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800  ">College details uploading form</h1>

              </div>

                <!-- Content Row -->
                
                <?php 
                      error_reporting(0); 
                          if ($_GET['out']==1){
                                                  

                              ?> <div  class="alert alert-success alert-dismissible  text-center "> 
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                                  <strong >Data uploaded </strong>
                          </div> <?php }
                          ?>
                              
                  


              
        
              <form class="m-5" action="upload.php" method="post">
                          <h5 class=" text-dark   "> State <small class=" text-warning ">{ The first letter should be captial } </small> </h5>
                          <select class="form-control mt-2 shadow border-left-primary "  name="state" required >
                              <option value="kerala">Kerala</option>
                              <option value="tamilnadu">Tamilnadu</option>
                              <option value="Karnataka">Karnataka</option>
                              <option value="hyderabad">Hyderabad</option> 
                          </select>

                          <h5 class=" text-dark  mt-4   "> District / Region / Zone <small class=" text-warning "> { The first letter should be captial }</small>  </h5>
                          <input class="form-control mt-2 shadow  border-left-primary " type="text" name="region"  >
                          <h5 class=" text-dark  mt-4  "> Rate the  college  <small class=" text-warning "> { 1- very imporatnt,2 -important ,3-less important }</small>  </h5>
                          <select class="form-control mt-2 shadow border-left-primary "  name="rate" required >
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                          </select> 
                          <h5 class=" text-dark  mt-4  "> College Name  <small class=" text-warning "> { Should be right format  }</small>  </h5>
                          <input class="form-control mt-2 shadow border-left-primary " type="text" name="clgname"  required >
                          <h5 class=" text-dark  mt-4  "> College Code / Short form  <small class=" text-warning "> { Eg : TKM , CET   }</small>  </h5>
                          <input class="form-control mt-2 shadow border-left-primary " type="text" name="clgshort"  required >
                          <h5 class=" text-dark  mt-4  ">  Any important details related to college   </h5>
                          <input class="form-control mt-2 shadow border-left-primary  " type="text" name="notes"   >

                          <p class=" text-danger text-center mt-3 "> Please enter the valid details only in case you entered any wrong details please inform the developer </p>

                          <div class="text-center">

                              <button class=" btn btn-success btn-md  mt-3  shadow px-3 " type="submit"> Upload</button>
                              <div>

                      
                          


                          </div>




              </form>


  <?php } 
                          else {
                            header("location:http://admissioncellindia.com");
                          } ?>
                                  





        





















        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
 
       

        <!-- Page level custom scripts -->
     
</body>
</html>