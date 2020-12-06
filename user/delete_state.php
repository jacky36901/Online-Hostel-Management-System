<?php
include "dbcontroller.php";
 $k=$_GET['b'];

    $s3="UPDATE `torneo`.`state` SET `status` = '8' WHERE `state`.`name` ='$k' ";
    mysqli_query($con,$s3);
    echo"<script>";
         echo("location.href='view_disabled_state.php'");
         echo"</script>";

mysqli_close($con);
?>