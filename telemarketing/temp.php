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
  <link  href="css/work.css"  rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link href="css/sb-admin-2.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>


<body >




<?php
    include "connection.php";
    session_start();
    $id=$_SESSION['user'];
    $sql = " SELECT  *  FROM adminuser WHERE teleid=$id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

   ?>




    <div class=" header  static-top text-light  "> 
        
        <div class="row  tex-center">
            <h4 class="mt-3 ml-auto mr-auto  "><strong>DEW DROPS<strong></h4> 
        
        </div>

              
          <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu" > 
          <label for="openSidebarMenu" class="sidebarIconToggle">
            <div class="spinner diagonal part-1"></div>
            <div class="spinner horizontal"></div>
            <div class="spinner diagonal part-2"></div>
          </label>
          <div  id="sidebarMenu">
            <ul class="sidebarMenuInner">
              <li ><strong class="text-warning" ><?php echo $name; ?></strong> <span>TELEMARKETING</span></li>
              <li class="text-center"><a href="working.php"  target="_blank">Working Mode</a></li>
              <li class="text-center"><a href="https://instagram.com/plavookac" target="_blank">Reminder Detail</a></li>
              <li class="text-center bg-danger"><a  href="logout.php" >LOGOUT</a></li>

            </ul>
          </div>

    </div>




    <?php

    if($start < $end){
        $sql3 = " SELECT * FROM $sheet WHERE `id`=$start";

        $result3 = $con->query($sql3);
        $row3 = $result3->fetch_assoc();

 
        ?>




        
        <div class="container mainmargi  shadow  ">
                <h3 class="text-danger  text-center  py-4 "><strong>DETAILS</strong></h3>
                <h3 class="text-white bg-dark text-center  py-3"><?php echo ($start."/".$end);?></h3>
         
 
          
                  <table class="table table-bordered  table-striped text-center">
                    <thead >
                      <tr>
                        <th>Name</th>
                        <th><strong class="text-primary"><?php echo $row3['candidate'];?></strong></th>
                  
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Contact Number</td>
                        <td><strong class="text-danger"><a href="tel: <?php echo $row3['MOBILE'];?> "> <?php echo $row3['MOBILE'];?> </a></td>
                    
                      </tr>
                      <tr>
                        <td>Branch</td>
                        <td><strong ><?php echo $row3['STREAM'];?></td>
                    
                      </tr>
                      <tr>
                        <td>District</td>
                        <td><strong ><?php echo $row3['DISTT'];?></td>

                      </tr>
                    </tbody>
                  </table>

        <div class="mt-5 ">

                          <form  action="id.php" method="POST" >
                                  <div class="form-group  ">
                                      <label for="formGroupExampleInput"class="text-dark ">Remark </label>
                            
                                      <input type="text" class="form-control border-left-primary" name="remark" >
                                      <label for="formGroupExampleInput"class="text-dark mt-4">Course Details </label>
                            
                                      <input type="text" class="form-control border-left-primary" name="course" >
                                      <label for="formGroupExampleInput"class="text-dark mt-4">Reminder Date <h8 class="text-warning">{ Date Format : dd/mm/yy }<h8> </label>
                                      
                                      <input type="text" class="form-control border-left-primary" name="reminder" >
                                      <label for="formGroupExampleInput"class="text-dark mt-4 "> Catogary  </label>
                                      
                                      <select class="form-control mt-2 shadow border-left-primary "  name="cat" required >
                                          <option value="Medical">Medical</option>
                                          <option value="Engineering">Engineering</option>
                                          <option value="Degree">Degree</option>
                                          <option value="Degree">Diploma</option>
                                      </select> 
          
                                      <div class="text-center " >
                                          <button type="submit" class="btn btn-primary mt-5 mb-5 px-4">NEXT</button>
                                      </div>
                                  </div>
                            </form> 
                        </div>
                 </div>





        </div>
        <?php
               }
          else { ?>
             <div class="container mainmargi  shadow  ">
                <h3 class="text-danger  text-center  py-4 "><strong>DETAILS</strong></h3>
                <h3 class="text-white bg-dark text-center  py-3"><?php echo ($start."/".$end);?></h3>
         
 
          
                  <table class="table table-bordered  table-striped text-center">
                    <thead >
                      <tr>
                        <th>Name</th>
                        <th><strong class="text-primary"><?php echo $row3['candidate'];?></strong></th>
                  
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Contact Number</td>
                        <td><strong class="text-danger"><a href="tel: <?php echo $row3['MOBILE'];?> "> <?php echo $row3['MOBILE'];?> </a></td>
                    
                      </tr>
                      <tr>
                        <td>Branch</td>
                        <td><strong ><?php echo $row3['STREAM'];?></td>
                    
                      </tr>
                      <tr>
                        <td>District</td>
                        <td><strong ><?php echo $row3['DISTT'];?></td>

                      </tr>
                    </tbody>
                  </table>

        <div class="mt-5 ">

                          <form  action="id.php" method="POST" >
                                  <div class="form-group  ">
                                      <label for="formGroupExampleInput"class="text-dark ">Remark </label>
                            
                                      <input type="text" class="form-control border-left-primary" name="remark" >
                                      <label for="formGroupExampleInput"class="text-dark mt-4">Course Details </label>
                            
                                      <input type="text" class="form-control border-left-primary" name="course" >
                                      <label for="formGroupExampleInput"class="text-dark mt-4">Reminder Date <h8 class="text-warning">{ Date Format : dd/mm/yy }<h8> </label>
                                      
                                      <input type="text" class="form-control border-left-primary" name="reminder" >
                                      <label for="formGroupExampleInput"class="text-dark mt-4 "> Catogary  </label>
                                      
                                      <select class="form-control mt-2 shadow border-left-primary "  name="cat" required >
                                          <option value="Medical">Medical</option>
                                          <option value="Engineering">Engineering</option>
                                          <option value="Degree">Degree</option>
                                          <option value="Degree">Diploma</option>
                                      </select> 
          
                                      <div class="text-center " >
                                          <button type="submit" class="btn btn-primary mt-5 mb-5 px-4">NEXT</button>
                                      </div>
                                  </div>
                            </form> 
                        </div>
                 </div>





        </div>
            <?php
          }
          ?>
 

















        <!-- Page level plugins -->

       

</body>

</html>