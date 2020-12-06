<?php
include "dbcontroller.php";
 $k=$_GET['b'];

    $s3="UPDATE `hostel`.`registration` SET `status` = '8' WHERE `registration`.`Reg_id` ='$k' ";
    mysqli_query($con,$s3);
   
echo "<script>";echo "alert('Successfully Deleted!')";echo"</script>";
        
         

mysqli_close($con);
?>