<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">
</head>
<body>




    <?php   



            session_start();
            if (isset($_SESSION['user'])){
            
                include "connection.php";
                $value = $_GET['value'];
                $no=0;
                echo $value;






                switch ($value){


                    case "kerala":
                        $result = mysqli_query($con,"SELECT * FROM clglist WHERE state = 'kerala' ");
                        break;


                    case "tamilnadu":
                        $result = mysqli_query($con,"SELECT * FROM clglist WHERE state = 'tamilnadu' ");
                        break;
                    case "karnataka":
                        $result = mysqli_query($con,"SELECT * FROM clglist WHERE state = 'Karnataka' ");

                        break;
                    case "hyderabad":
                        $result = mysqli_query($con,"SELECT * FROM clglist WHERE state = 'hyderabad' ");
                        break;
                    case "complete":
                        $result = mysqli_query($con,"SELECT * FROM clglist  ");
                
                        break;
                    }

                




    ?>




                <div class="container ">
                    <table class="table table-striped">
                                <thead>
                                    <tr>
                                   
                                        <th>No</th>
                                        <th>Id</th>
                                        <th>State</th>
                                        <th>Region</th>
                                        <th>Rating</th>
                                        <th>Clg Name</th>
                                        <th>Clgcode</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                  <tbody>
                                    <?php
                                        while($row = mysqli_fetch_array($result))
                                        { $no=$no+1; 
                                        ?>




                                    
                                                <tr>                                          
                                                <td> <?php echo  $no; ?> </td>
                                                <td> <?php echo $row['id'] ;?></td>
                                                <td> <?php echo $row['state']; ?></td>
                                                <td> <?php echo $row['region']; ?></td>
                                                <td> <?php echo $row['rate']; ?></td>
                                                <td> <?php echo $row['college']; ?></td>
                                                <td> <?php echo $row['clgcode']; ?></td>
                                                <td> <?php echo $row['details']; ?></td>
                                                </tr> 
                                        <?php } ?>
                                            
                                </tbody>
                        </table>
                </div>
            <?php 
             } 
        ?>

    
</body>
</html>