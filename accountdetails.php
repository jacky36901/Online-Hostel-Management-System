<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:index.php");
}
include('dbcontroller.php');
$a10=$_SESSION['sess'];
    $yu="select * from registration where username='$a10'";
    $tt=mysqli_query($con,$yu);

$tt2=mysqli_fetch_array($tt);
    $f_name=$tt2['f_name'];

   
if(isset($_POST["submit"]))
  {


$ac_num=$_POST["ac_num"];
      $ifsc=$_POST["ifsc"];
      $branch=$_POST["branch"];
      $name=$_POST["name"];
     




$sql=mysqli_query ($con,"INSERT INTO `account` (`a_id`, `f_name`, `ac_num`, `ifsc`, `branch`, `name`, `status`) VALUES (NULL, '$f_name', '$ac_num', '$ifsc', '$branch', '$name', '1')");
      
  if($sql==true)
  { ?>
          <script>
          alert("Details  sended!!!");

          </script>
          <?php


  }
  else {
    ?>
            <script>
            alert(" failed to add  details!!!");

            </script>
            <?php
    echo mysqli_connect_error();
    // code...
  }

      
}
 ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hostel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <img src="img/flag.jpg" alt="">
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Zi</a></li>
                        <li><a href="#">Fr</a></li>
                    </ul>
                </div>
            </div>
<!--            <a href="#" class="bk-btn">Sign Up</a>-->
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
              
                <li><a href="./about-us.html">About Us</a></li>
                <li><a href="./pages.html">Pages</a>
<!--
                    <ul class="dropdown">
                        <li><a href="./room-details.html">Room Details</a></li>
                        <li><a href="#">Deluxe Room</a></li>
                        <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li>
                    </ul>
-->
                </li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (91) 9941725833</li>
            <li><i class="fa fa-envelope"></i> oasishostel@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> (91) 9941725833</li>
                            <li><i class="fa fa-envelope"></i> oasishostel@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
<!--
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
-->
                            </div>
<!--                            <a href="#" class="bk-btn">Sighn Up</a>-->
<!--
                            <div class="language-option">
                                <img src="img/flag.jpg" alt="">
                                <span>EN <i class="fa fa-angle-down"></i></span>
                                <div class="flag-dropdown">
                                    <ul>
                                        <li><a href="#">Zi</a></li>
                                        <li><a href="#">Fr</a></li>
                                    </ul>
                                </div>
                            </div>
-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="home.php">Home</a></li>
                                    <li class="active"><a href="rooms.php">Book Now</a></li>
                                     <li class="active"><a href="Refund.php">Refund</a></li>
                                    <li><a href="aboutus1.php">About Us</a></li>
<!--                                    <li><a href="./pages.html">Pages</a>-->
<!--
                                        <ul class="dropdown">
                                            <li><a href="./room-details.html">Room Details</a></li>
                                            <li><a href="./blog-details.html">Blog Details</a></li>
                                            <li><a href="#">Family Room</a></li>
                                            <li><a href="#">Premium Room</a></li>
                                        </ul>
-->

<!--                                    <li><a href="./blog.html">News</a></li>-->
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="profile.php">Profile</a></li>
                                         <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </nav>
<!--
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <?php 

$sql11="select * from booking where f_name='$f_name'";
$res1=mysqli_query($con,$sql11);
$tt2=mysqli_fetch_array($res1);
    $payment1=$tt2['payment1'];
?>
                 
  
            
                         <h2 class="title">Account Details</h2>
                    
                        <form method="post" style="display:block;border:2px;background-color:#DFCFBE">
                          
               

<div class="frm-row">
    
  
                        
                         <div class="input-group">
                                <label for="children" class="field-label">Account Number</label>
                                <label for="children" class="field prepend-icon">
                                    <input type="text" id="ac_num" name="ac_num" value=""  class="gui-input" required="" style="position:relative;left:490px;" >
                                </label>
    </div>
     
                         <div class="input-group">
                                <label for="children" class="field-label">IFSC Code</label>
                                <label for="children" class="field prepend-icon">
                                    <input type="text" id="ifsc" name="ifsc" value=""  class="gui-input" required="" style="position:relative;left:532px;" >
                                </label>
    </div>
     
                         <div class="input-group">
                                <label for="children" class="field-label">Branch</label>
                                <label for="children" class="field prepend-icon">
                                    <input type="text" id="branch" name="branch" value=""  class="gui-input" required="" style="position:relative;left:556px;" >
                                </label>
    </div>
     
                         <div class="input-group">
                                <label for="children" class="field-label">Account Holder Name</label>
                                <label for="children" class="field prepend-icon">
                                    <input type="text" id="name" name="name" value=""  class="gui-input" required="" style="position:relative;left:452px;" >
                                </label>
    </div>
    
                            </div>
                            
                            
 
                        <div class="section colm colm6"><br><br>
                            
                            <input type="submit" value="ADD" class="submit" name="submit" id="submit" style="position:relative;background-color:red;color:white;"/>
                        </div>

 
<div class="frm-row">
  <div class="option-group field">
   
    
         
   
               
  </div>
</div>
 
 
                        


                        </form></div>
</div>
                        
                       
                    
                </div>
            	
            </div>
       
    </div>
    <!-- Breadcrumb Section End -->

   
   
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                
                            </div>
                            <p>We inspire and reach millions of students<br /> </p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>(91) 9941725833</li>
                                <li>oasishostel@gmail.com</li>
                                <li>Hostel oasis</li>
                                  <li>infopark</li>
                                  <li>kakkanad</li>
                                  <li>kochi</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
<!--
                        <div class="ft-newslatter">
                            <h6>Enquiries</h6>
                            <p></p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Any doubts?">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
-->
                    </div>
                </div>
            </div>
        </div>
       
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>