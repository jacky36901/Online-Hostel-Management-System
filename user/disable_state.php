<?php
include "dbcontroller.php";
 $k=$_GET['b'];

    $s3="UPDATE `hostel`.`room` SET `status` = '9' WHERE `state`.`room` ='$k' ";
    mysqli_query($con,$s3);
    echo"<script>";
         echo("location.href='view_state.php'");
         echo"</script>";

mysqli_close($con);
?>