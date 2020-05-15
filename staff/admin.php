<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Rahul</title>
</head>
<body>
    <?php

    session_start();
    include 'connection.php';

    $user=mysqli_real_escape_string($con, $_POST['u']);
    $password= mysqli_real_escape_string($con,$_POST['p']);




    $sql = " SELECT  *  FROM adminuser WHERE users = '$user' AND passcode = '$password' ";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    $numbers = mysqli_num_rows($result);
    

    if($numbers==0){

        header("location:http://admissioncellindia.com?out=1");
            
       
           

        }
        
    else {

        if($row['type']==0){
            $_SESSION['user']=$row['teleid'];
            header("location:dashboard.php");
            
       
           

        }
        if($row['type']==2){
            
            header("location:http://admissioncellindia.com?out=1");
            
       
           

        }
    }
    
    



    












    ?>
    
</body>
</html>