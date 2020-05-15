<?php



    include "connection.php";

    $name=$_POST["use"];
    $excel=$_POST['excel'];
    $from=$_POST['from'];
    $to=$_POST['too'];
    echo $to;


    $sql="UPDATE `adminuser` SET `table name`= '$excel',`fr`=$from,`tu`=$to,`cu`=0 WHERE `users`='$name'";
    $con->query($sql);

    header('location:tele.php?out=1');







?>