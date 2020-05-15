<?php


session_start();






include "connection.php";


$id=$_SESSION['user'];

$sql = " SELECT  *  FROM adminuser WHERE teleid=$id";
$result = $con->query($sql);
$row = $result->fetch_assoc();

$name=$row['name'];
$current=$row['cu'];
$sheet=$row['table name'];
$start=$row['fr'];

$end=$row['tu'];

$sql2 = " SELECT  *  FROM $sheet";
$result2 = $con->query($sql2);
$row2 = $result2->fetch_assoc(); 








$remark=$_POST['remark'];
$course=$_POST['course'];
$reminder=$_POST['reminder'];
$cat=$_POST['cat'];
$excel=$_SESSION['excel'];
$ids=$_SESSION['start'];

$sqlu= " UPDATE `$excel`  SET `remark`='$remark' ,`course`='$course',`reminder`='$reminder',`catogary`='$cat' , `tele`='$id'  WHERE id= $ids";
$con->query($sqlu);
echo $sqlu;






$start =$start+1;
$no=$current+1;


$sql4 = " UPDATE `adminuser` SET `fr`=$start WHERE `name`= '$name' ";
$con->query($sql4);
$sql5 = " UPDATE `adminuser` SET `cu`=$no WHERE `name`= '$name' ";
$con->query($sql5);






?>