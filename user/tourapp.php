<?php
include "dbcontroller.php";
$a=$_GET['b'];

$sql3="update refund set status='2' where f_name='$a'";
mysqli_query($con,$sql3);

echo "<script>";echo "alert('Approved')";echo"</script>";
?>
<html>
<body>
    <script>
    <?php
        echo("location.href='refund_request.php'");
        ?>
    </script>
    </body>
</html>