<?php

       $con = mysqli_connect("localhost","u175340606_admin","4~SbW]LA","u175340606_admissioncell");
    if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
             exit();
    }

    $state= mysqli_real_escape_string ( $con,$_POST['state']);
    $region= mysqli_real_escape_string ( $con,$_POST['region']);
    $rate= mysqli_real_escape_string ( $con,$_POST['rate']);
    $Clgname= mysqli_real_escape_string ( $con,$_POST['clgname']);
    $clgcode= mysqli_real_escape_string ( $con,$_POST['clgshort']);
    $details= mysqli_real_escape_string ( $con,$_POST['notes']);



    $result=mysqli_query($con,"SELECT count(*) as total from clglist");
    $data=mysqli_fetch_assoc($result);
    $numcolum= $data['total']+1;
    $cr=$numcolum."A";


    $upload= "INSERT INTO clglist (id, state, region, rate, college, clgcode, details) VALUES ($numcolum,'$state','$region',$rate,'$Clgname','$clgcode','$details' )";
    mysqli_query($con,$upload) or die(mysqli_error($con));
    $url = $_SERVER['HTTP_REFERER'];
    $sql2="CREATE TABLE  `$cr` (`coursename` text, `catogary` text, `duration` text, `fee1` text, `fee2` text, `fee3` text, `fee4` text, `fee5` text, `fee6` text)";
    mysqli_query($con,$sql2);
    header("Location:". $url."?out=1");

    







?>