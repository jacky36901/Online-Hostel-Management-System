<?php
include "dbcontroller.php";
 $k=$_GET['b'];
    $s3="UPDATE `games` SET `status` = '1' WHERE `games`.`id` ='$k' ";
    mysqli_query($con,$s3);
    echo"<script>";
         echo("location.href='view_disabled_games.php'");
         echo"</script>";

mysqli_close($con);
?>