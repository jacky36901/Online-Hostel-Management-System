<?php
include "dbcontroller.php";
$a=$_GET['m'];
$sql1="update sponsor set status='1' where Username='$a'";
$sql2="update user_details set status='1' where username='$a'";
$sql3="update login set Status='1' where Username='$a'";
mysqli_query($con,$sql1);
mysqli_query($con,$sql2);
mysqli_query($con,$sql3);
$n=$_GET['mail'];
$gh=mysqli_query($con,"select * from login where Username='$a'");
$gh1=mysqli_fetch_array($gh);
$pass=$gh1['Password'];
$subject = "Your account activated";
$message = "Please use registered Username and password to login "."\n Username:".$a;
$headers = "From: torneoproject2020@gmail.com";        
mail($n, $subject, $message, $headers);
echo "<script>";echo "alert('Approved')";echo"</script>";
?>
<html>
<body>
    <script>
    <?php
        echo("location.href='sponsor_approve.php'");
        ?>
    </script>
    </body>
</html>