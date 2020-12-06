<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
$user=$_SESSION['sess'];
include "../dbcontroller.php";
 $a10=$_SESSION['sess'];
    $yu="select * from registration where username='$a10'";
    $tt=mysqli_query($con,$yu);

$tt2=mysqli_fetch_array($tt);
     $f_name=$tt2['f_name'];
$sql2="select * from bank where status!=8";
$exe=mysqli_query($con,$sql2);

if(isset($_POST['submit']))
{
$card=$_POST['cardno'];
  
    $exp=$_POST['expiry'];
    $cvv=$_POST['cvv'];
  $holder=$_POST['cardholder'];
    
    $check=mysqli_query($con,"select * from bank where (cardno='$card' and cvv='$cvv') and (expiry='$exp' and status='1') and cardholder='$holder'");
    
    $no=mysqli_num_rows($check);
    if($no!=0){ 
        mysqli_query($con,"UPDATE booking SET status='0' where f_name='$f_name'");
         ?>

            <script>
                 mysqli_query($con,"UPDATE booking SET status='0' where f_name='$f_name'");

            
            </script>
<script>
alert("Payment completed");
    </script>
 
            <?php
}
    else
    {
         
        ?>
            <script>
            alert("Payment failed!!!");

            </script>

            <?php

          
    }
 


}
if(isset($_POST['submit1']))
{
    echo "<script>";
       echo("location.href='../rooms.php'");
       echo "</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Card Pay</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="section colm colm6"><form method="post" action="">
                                <input type="submit" value=" GO TO HOME" class="submit1" name="submit1" id="submit1" style="position:relative;background-color:green;color:white;size:10;font-size:150%;"/></form>
                            </div>
                    

              
              
                            
                <div class="card-body">
                    <h2 class="title">CARD PAYMENT</h2>
                    <form method="POST" action="">
                        <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" id="cardno" value="<?php echo $tt2['f_name'];?>" name="cardno">
                                </div>

                        
                              <div class="input-group">
                                    <label class="label">CARD NUMBER</label>
                                    <input class="input--style-4" type="text" id="cardno" name="cardno">
                                </div>

                              
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">EXPIRATION DATE</label>
                                    <input class="input--style-4" type="date" name="expiry" id="expiry">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">CVV/CVC</label>
                                    <input class="input--style-4" type="text" id="cvv" name="cvv">
                                </div>
                            </div>
                           
                        </div>
                        <div class="row row-space">
<!--
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="date" name="dob">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
-->
                            
                        </div>
                        
                       
<!--
                        <div class="input-group">
                            <label class="label">TYPE OF PAYMENT</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="hiqh">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Debit</option>
                                    <option>Credit</option>
                                    <option>VISA</option>
                                    <option>Master Card</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
-->
                       
                        <div class="input-group">
                                    <label class="label">NAME ON CARD</label>
                                    <input class="input--style-4" type="text" id="cardholder" name="cardholder">
                                </div>
                      
                        <div class="form-submit">
                            
                            <input type="submit" value="PAY NOW" class="submit" name="submit" id="submit" style="position:relative;background-color:red;color:white;"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->