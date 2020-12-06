<?php
include "dbcontroller.php";
 $k=$_GET['b'];

    $s3="UPDATE `torneo`.`city` SET `status` = '9' WHERE `city`.`name` ='$k' ";
    mysqli_query($con,$s3);
    echo"<script>";
         echo("location.href='view_district.php'");
         echo"</script>";

mysqli_close($con);
?>