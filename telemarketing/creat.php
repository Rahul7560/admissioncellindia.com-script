<?php


include "connection.php";
$sql = " SELECT * FROM `adminuser` WHERE `teleid`= 2 ";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$numbers = mysqli_num_rows($result);

$teleid=$numbers+1;



$name= $_POST['name'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$passcode= $_POST['passcode'];

$sql2="INSERT INTO `adminuser`(`users`, `passcode`, `email`, `mobile`, `type`, `teleid`, `name`, `table name`, `fr`, `tu`, `cu`) VALUES ('$name','$passcode','$email',$mobile,2,$teleid,'$name',0,0,0,0)";

$result2 = $con->query($sql2);
header("location:http://admissioncellindia.com/create.php?out=1");







?>