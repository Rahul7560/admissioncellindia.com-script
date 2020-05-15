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
  <link  href="css/dashbor.css"  rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>


<body >




<?php
    include "connection.php";
    session_start();




    if (isset($_SESSION['user'])){ 
        $id=$_SESSION['user'];
        $sql = " SELECT  *  FROM adminuser WHERE teleid=$id";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();

        $name=$row['name'];

        $current=$row['fr']; 
        $cu=$row['tu'];?>

    
      <div class=" header  static-top text-light  "> 
        
        <div class="row tex-center">
            <h4 class="mt-3 ml-auto mr-auto  "><strong>DEW DROPS<strong></h4> 
            
        </div>

            </div>
                  
       </div>
        <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu" > 
        <label for="openSidebarMenu" class="sidebarIconToggle">
          <div class="spinner diagonal part-1"></div>
          <div class="spinner horizontal"></div>
          <div class="spinner diagonal part-2"></div>
        </label>
        <div id="sidebarMenu">
          <ul class="sidebarMenuInner">
            <li ><strong class="text-warning" ><?php echo $name; ?></strong> <span>TELEMARKETING</span></li>
            <li class="text-center"><a href="working.php"  target="_blank">Working Mode</a></li>
            <li class="text-center"><a href="#" target="_blank">Reminder Detail</a></li>
            <li class="text-center bg-danger"><a  href="logout.php" >LOGOUT</a></li>

          </ul>
        </div>
        <div class=" row justify-content-center mx-2 mainmargin ">

                <div class="col-xl-5 col-md-6 mb-4   ">
                              <div class="card border-left-success  shadow h-100 py-3">
                                <div class="card-body">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs  font-weight-bold text-success text-uppercase mb-1">Total
                                        Numbers 
                                      </div>
                                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $cu; ?></div>
                                    </div>
                                    <div class="col-auto">
                                      <i class="fas fas fa-phone fa-2x text-primary-300"style='color:green'></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                </div>
                <div class="col-xl-5 col-md-6 mb-4  ">
                              <div class="card border-left-primary  shadow h-100 py-3">
                                <div class="card-body">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs  font-weight-bold text-primary text-uppercase mb-1">Total
                                        Numbers Called
                                      </div>
                                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $current; ?></div>
                                    </div>
                                    <div class="col-auto">
                                      <i class=" fas fa-headphones fa-2x text-primary-300"style='color:blue'></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                </div>
          </div>













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