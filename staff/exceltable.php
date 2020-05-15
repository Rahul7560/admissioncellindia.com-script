<?php


include "connection.php";

$name=$_POST['excelnmae'];


$sql1="ALTER TABLE `$name`  ADD remark text ";
$con->query($sql1);
$sql2="ALTER TABLE `$name`  ADD  course text";
$sql3="ALTER TABLE `$name`  ADD reminder text";
$sql4="ALTER TABLE `$name`  ADD catogary text";
$sql5="ALTER TABLE `$name`  ADD tele text";

$con->query($sql2);
$con->query($sql3);
$con->query($sql4);
$con->query($sql5);

header('location:tele.php?out=2')

?>