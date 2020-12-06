<?php
include "dbcontroller.php";
$a=$_GET['b'];
$sql="update sponsorship set status='0' where id='$a'";
$sql2="update tournament set status='2' where id='$a'";
mysqli_query($con,$sql);
mysqli_query($con,$sql2);

echo "<script>";echo "alert('Rejected')";echo"</script>";
?>
<html>
<body>
    <script>
    <?php
        echo("location.href='sponsorship.php'");
        ?>
    </script>
    </body>
</html>