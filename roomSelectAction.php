<?php
    include "user/dbcontroller.php";
    if(isset($_POST['roomId'])){
        $roomId=$_POST['roomId'];
        $categoryId=$_POST['categoryId'];
        $sql3="SELECT roomRent FROM rooms WHERE room_id=".$roomId;
        $res3=mysqli_query($con,$sql3);
        while($row3=mysqli_fetch_array($res3)){
            $roomRent=$row3['roomRent'];
        }
        $sql4="SELECT categoryCharge FROM category WHERE cat_id=".$categoryId;
        $res4=mysqli_query($con,$sql4);
        while($row4=mysqli_fetch_array($res4)){
            $categoryCharge=$row4['categoryCharge'];
        }
        $sum=$roomRent+$categoryCharge;
        echo "$sum";
    }
?>