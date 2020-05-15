<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    include "connection.php";
    session_start();
    $id=$_SESSION['user'];
    $sql = " SELECT  *  FROM adminuser WHERE teleid=$id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    $name=$row['name'];
    $current=$row['cu'];
    //$sheet=$row['table name'];
    $sheet="Sheet1";
    $start=$row['fr'];

    $end=$row['tu'];

    $sql2 = " SELECT  *  FROM $sheet";
    $result2 = $con->query($sql2);
    $row2 = $result2->fetch_assoc();





    if($start <= $end){
        $sql3 = " SELECT * FROM `Sheet1` WHERE `id`=$start";

        $result3 = $con->query($sql3);
        $row3 = $result3->fetch_assoc();

        $start =$start+1;
        $no=$current+1;


        $sql4 = " UPDATE `adminuser` SET `fr`=$start WHERE `name`= '$name' ";
        $con->query($sql4);
        $sql5 = " UPDATE `adminuser` SET `cu`=$no WHERE `name`= '$name' ";
        $con->query($sql5);
   }
 







?>
    
</body>
</html>