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
        if (isset($_SESSION['user'])){
            include "connection.php";
            $code = mysqli_real_escape_string($con, $_GET['code']);
            $codes = mysqli_query($con,"SELECT * FROM clglist WHERE clgcode = '$code' ");
            $coderow = $codes->fetch_assoc();
            $id=$coderow['id'];

            



            $idd=$id."A";
            $_SESSION['idd']=$idd;
             
            
            $result = mysqli_query($con,"SELECT * FROM clglist WHERE id = $id ");
            $row = $result->fetch_assoc();
            $no=0;

            


        
            
            

          
      
        

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
                  
                    <a class="collapse-item" href="#">  Upload Course Detail </a>
                    <a class="collapse-item " href="clglistview.php"> College list </a>

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
                    <h1 class="h3 mb-0 text-gray-800  ">Dashboard</h1>
                    

                  </div>
                  <div class="card py-3 fas fa-signal-3    ">
                        <div class="text-dark" >
                            <h5 class="ml-3">College Name   :<?php echo $row['college'];?><h5>
                            <h5 class="ml-3">State          :<?php echo $row['state'];?><h5>
                            <h5 class="ml-3">Region         :<?php echo $row['region'];?><h5>
                            <h5 class="ml-3">Ratng          :<?php echo $row['rate'];?><h5>
                            <h5 class="ml-3">College Code   :<?php echo $row['clgcode']; ?><h5>
                        </div>
                    </div>


                    <div class="container  text-center">
                    <table class="table table-striped table-responsive-sm ">
                                <thead>
                                    <tr>
                                   
                                        <th>No</th>
                                        <th>Course Name</th>
                                        <th>Catogary</th>
                                        <th>Duration </th>
                                        <th>1st year </th>
                                        <th>2st year </th>
                                        <th>3rd year </th>
                                        <th>4th year </th>
                                        <th>5th year </th>
                                        <th>6th year </th>

                                    </tr>
                                </thead>
                                  <tbody  class="text-dark" ">
                                    <?php
                                        $resul = mysqli_query($con,"SELECT * FROM $idd ");

                                        while($ro = mysqli_fetch_array($resul))
                                        {   
                                            $no=$no+1; 
                                        ?>




                                    
                                                <tr>                                          
                                                <td> <?php echo  $no; ?> </td>
                                                <td> <?php echo $ro['coursename'] ;?></td>
                                                <td> <?php echo $ro['catogary']; ?></td>
                                                <td> <?php echo $ro['duration']; ?></td>
                                                <td> <?php echo $ro['fee1']; ?></td>
                                                <td> <?php echo $ro['fee2']; ?></td>
                                                <td> <?php echo $ro['fee3']; ?></td>
                                                <td> <?php echo $ro['fee4']; ?></td>
                                                <td> <?php echo $ro['fee5']; ?></td>
                                                <td> <?php echo $ro['fee6']; ?></td>
                                                </tr> 
                                        <?php } ?>
                                            
                                </tbody>
                        </table>
                </div>
                <div class="container mt-5 bg-primary"  >
                    <form method="GET" action="courseupload.php">
                        <table class="table table-striped table-responsive-sm ">
                                    <thead>
                                        <tr class="text-light">
                                    
                                            <th>No</th>
                                            <th>Course Name</th>
                                            <th>Catogary</th>
                                            <th>Duration </th>
                                            <th>1st year </th>
                                            <th>2st year </th>
                                            <th>3rd year </th>
                                            <th>4th year </th>
                                            <th>5th year </th>
                                            <th>6th year </th>

                                        </tr>
                                    </thead>







                                        <tr>
                                    
                                            <th>*</th>
                                            <th><input type="text" class="form-control" name="coursename" placeholder="Course name" ></th>
                                            <th><input type="text" class="form-control" name="catogary" placeholder="Catogary" ></th>
                                            <th><input type="text" class="form-control" name="duration" placeholder="Duration" > </th>
                                            <th><input type="text" class="form-control" name="fee1" placeholder="Fee1st" > </th>
                                            <th><input type="text" class="form-control" name="fee2" placeholder="Fee2nd" > </th>
                                            <th><input type="text" class="form-control" name="fee3" placeholder="Fees3rd" > </th>
                                            <th><input type="text" class="form-control" name="fee4" placeholder="Fees4th" > </th>
                                            <th><input type="text" class="form-control" name="fee5" placeholder="Fees5th" > </th>
                                            <th><input type="text" class="form-control" name="fee6" placeholder="Fees6th" > </th>

                                        </tr>
                                    </thead>
                        </table>
                        <div class="text-center pb-3" >
                            <button class="btn btn-light text-danger" type="submit">Add</button>
                        </div>
                    </form>
                
                
                </div>


                  <!-- Content Row -->
                  

                </div>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top   rounded" href="#page-top">
                  <i class="fas fa-angle-up"></i>
                </a>

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

       

</body>

</html>