<?php
include "dbcontroller.php";
 $k=$_GET['b'];

    $s3="UPDATE `games` SET `status` = '9' WHERE `games`.`id` ='$k' ";
    mysqli_query($con,$s3);
    echo"<script>";
         echo("location.href='view_games.php'");
         echo"</script>";

mysqli_close($con);
?>