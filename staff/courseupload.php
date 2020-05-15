<?php


    session_start();
    include "connection.php";

    $coursename=$_GET['coursename'];
    $catogary=$_GET['catogary'];
    $duration=$_GET['duration'];
    $fee1=$_GET['fee1'];
    $fee2=$_GET['fee2'];
    $fee3=$_GET['fee3'];
    $fee4=$_GET['fee4'];
    $fee5=$_GET['fee5'];
    $fee6=$_GET['fee6'];
    $id=$_SESSION['idd'];

    $sql="INSERT INTO `$id`(`coursename`, `catogary`, `duration`, `fee1`, `fee2`, `fee3`, `fee4`, `fee5`, `fee6`) VALUES ('$coursename','$catogary','$duration','$fee1','$fee2','$fee3','$fee4','$fee5','$fee6')";
    $con->query($sql);
    $url=$_SERVER['HTTP_REFERER'];
    header('location:'.$url);
 




?>