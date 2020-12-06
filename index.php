<?php
session_start();
$con=mysqli_connect("localhost","root","","hostel");
if(isset($_POST['signin']))
{
$email=$_POST['email'];
$d=$_POST['password'];
    echo "<script>alert('".$c."')</script>";
    $sql="select * from login where email='$email' and password='$d'";
    $exe=mysqli_query($con,$sql);
     $fetch=mysqli_fetch_array($exe);  
   $c=$fetch['username'];
  $count=mysqli_num_rows($exe);
     if($count>0)
    {
        $utype=$fetch['utype'];
     if($count>0 && $utype==1)
     {
        $_SESSION['sess']=$c;
        header("location:user");
     }
         else if($count>0 && $utype==2)
         {
            $_SESSION['sess']=$c;
        header("location:home.php?b=".$c);  
         }
      
    
    }
     else
            {
                
	     echo "<script>";
                
	      echo "alert('this account is not exist')";
	     echo "</script>";
 
            }
   
   
}
if(isset($_POST['submit2']))
{
 $search=$_POST['search']; 
   
 mysqli_query($con,"INSERT INTO `enquiries` (`enq_id`, `search`, `status`) VALUES (NULL, '$search', '1')");
}
mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oasis Hostel</title>

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
            <a href="colorlib-regform-4/index.php" class="bk-btn">Sign Up</a>
        </div>c
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
                            <a href="colorlib-regform-4/index.php" class="bk-btn">Sign Up</a>
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
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li class="active"><a href="aboutus.php">About Us</a></li>
                                    <li class="active"><a href="contact.php">Contact</a></li>
                                    

                                    
                                </ul>
                            </nav>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
        
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Oasis Hostel</h1>
                        <p>Here are the best hostel fecilities, including food and water.</p>
                        <a href="index.php" class="primary-btn">Book Now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3>LOGIN</h3>
                        <form  method="POST">
                            
                            <div class="select-option">
                                <label for="guest">Email</label>
                                <input type="text"  id="email" name="email">
                            </div>
                            <div class="select-option">
                                <label for="guest">Password</label>
                                <input type="password"  id="password" name="password">
                            </div>
                           <div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" type="submit" name="signin" style="position:relative;background-color:red;color:white;">
							Sign in
						</button>
					</div>
<!--
                            <div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

						<a href="forgot2.php" class="txt2 hov1">
							Password?
						</a>
					</div>
-->

					<div class="text-center">
						<span class="txt1">
							Create an account?
						</span>

						<a href="colorlib-regform-4/index.php" class="txt2 hov1">
							Sign up
						</a>
					</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg"></div>
        </div>
    </section>
    <!-- Hero Section End -->
    

    <!-- About Us Section Begin -->
    
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
                        <div class="ft-newslatter">
                            <h6>Enquiries</h6>
                            <p></p>
                            <form action="#" method="post" class="fn-form">
                                <input type="text" id="search" name="search" placeholder="Any doubts?">
                                <button type="submit2" value="submit" name="submit2"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
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
                <input type="text" id="search" name="search">
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