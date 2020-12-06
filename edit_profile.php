<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
include "dbcontroller.php";
$user=$_SESSION['sess'];
$a=$_GET['b'];
$sql90="select * from registration where username='$user'";
$exe90=mysqli_query($con,$sql90);
if(isset($_POST['submit']))
{
    $f_name=$_POST["f_name"];
    $email=$_POST["email"];
      $phone=$_POST["phone"];
      $home=$_POST["home"];
      $post=$_POST["post"];
      $city=$_POST["city"];
      $state=$_POST["state"];
      $pincode=$_POST["pincode"];
        $visitor1=$_POST["visitor1"];
        $visitor2=$_POST["visitor2"];
    $password=$_POST["password"];
      
    
$sql78="update registration set f_name='$f_name', email='$email',phone='$phone',home='$home',post='$post',city='$city',state='$state',visitor1='$visitor1',visitor2='$visitor2', password='$password'";
    if(mysqli_query($con,$sql78))
    {
         echo "<script>";echo "alert('Successfully edited!')";echo"</script>";
         echo "<script>";
        echo("location.href='profile.php'");
        echo"</script>";
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
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
                <li class="active"><a href="index.php">Home</a></li>
              
                <li><a href="aboutus.php">About Us</a></li>
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
                                    <li><a href="aboutus1.php">About Us</a></li>
                                    <li><a href="Refund.php">Refund</a></li>
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
                                    <li><a href="contactus1.php">Contact</a></li>
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
                             
<center>
       <form id="regForm" action="" method="post" style="display:block;border:2px;background-color:#DFCFBE">
   <?php
           while($fetch90=mysqli_fetch_array($exe90))
           {
           ?>
   <img src="images/<?php echo $fetch90['photo']?>" width=220px height=220px/>
           <br>
           <br><label>First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="email" type="text" name="email" style="position:relative;left:380px;" placeholder="New Email" value="<?php echo $fetch90['f_name'];?>" readonly>
           <br>
           <br><label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="email" type="text" name="email" style="position:relative;left:400px;" placeholder="New Email" value="<?php echo $fetch90['email'];?>" >
           
       
             <br>
           <br>    <label>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="phone" type="text" name="phone" style="position:relative;left:400px;" placeholder="New phone" value="<?php echo $fetch90['phone'];?>" >
           
       
             <br>
            <br>    <label>Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="home" type="text" name="home" style="position:relative;left:403px;" placeholder="New home" value="<?php echo $fetch90['home'];?>" >
           
      
             <br>
            <br>    <label>Post&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="post" type="text" name="post" style="position:relative;left:409px;" placeholder="New post" value="<?php echo $fetch90['post'];?>" >
           
       
             <br>
            <br>    <label>City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="city" type="text" name="city" style="position:relative;left:410px;" placeholder="New city" value="<?php echo $fetch90['city'];?>" >
      
             <br>
            <br>    <label>State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="state" type="text" name="state" style="position:relative;left:407px;" placeholder="New state" value="<?php echo $fetch90['state'];?>" >
     
             <br>
            <br>    <label>Visitor1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="visitor1" type="text" name="visitor1" style="position:relative;left:402px;" placeholder="New visitor1" value="<?php echo $fetch90['visitor1'];?>" >
      
             <br>
            <br>    <label>Visitor2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="visitor2" type="text" name="visitor2" style="position:relative;left:402px;" placeholder="New visitor2" value="<?php echo $fetch90['visitor2'];?>" >
           
     
             <br>
           <br>   <label>Current Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="password" type="text" name="password" style="position:relative;left:366px;" placeholder="Password" value="<?php echo $fetch90['password'];?>" readonly>
           
     
             <br>
           <br>
           <label>New Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="password" type="text" name="password" style="position:relative;left:373px;" placeholder="Password" value="<?php echo $fetch90['password'];?>" >
           
     
             <br>
           <br>
     
       <!--<label>Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><input id="name11" type="text" name="status" placeholder="status.." value="<?php echo $fetch90['status'];?>">
           
       <p id="p101"></p>
                 <script>
                 $("#name11").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z]{6,16}$') ) {
       $('#p101').hide();
    } else {
        
       $('#p101').show();
       $('#p101').text("* enter a valid status *");
        $("#name11").focus();
        
    }
});
    </script>-->
           
              
       <br><br>
        
      <?php
           }
           ?>
       
       <br> <br> 
     <input id="submit" type="submit" name="submit" value="UPDATE" style="position:relative;background-color:red;color:white;">
        <script>
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
        
    </div>
  
</form>
        </center>  
                     
                    </div>
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
    <!-- <script src="js/jquery.nice-select.min.js"></script> -->
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>