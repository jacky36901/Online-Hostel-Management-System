<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:rooms.php");
}
include "dbcontroller.php";
$a10=$_SESSION['sess'];
//    $yu="select * from registration where username='$a10'";
//    $tt23=mysqli_query($con,$yu);
//$result222=mysqli_fetch_array($tt23);
//     $f_name=$result222['f_name'];
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
                     <?php
$con=mysqli_connect("localhost","root","","hostel");
$sql="select * from registration where username='$a10'";
$exe=mysqli_query($con,$sql);
?>
<center><h2 style="color:blue"><b style="font-size:25px;">STUDENTS DETAILS</b></h2></center>
<form method="POST">
    <center><br><br>
				<table class="table table-striped" border="1">
					
					<?php
                    while($fetch2=mysqli_fetch_array($exe))
						{
                          
							?>
                    
                   
                    
						
                    <tr><td colspan="4" align="center"><img src="images/<?php echo $fetch2['photo']?>" width="200px" height="200px"></td></tr>
                  
                    
                     
                    
                    <tr><td></td><td></td><td><b style="font-size:14px;">First Name  :</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['f_name']?>
                                   &nbsp;
                                   </td>
							</tr>
                   
                     <tr><td></td><td></td><td><b style="font-size:14px;">Last Name  :</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['l_name']?>
                                  
                                    </td>
							</tr>
                                  
                    <tr><td></td><td></td><td><b style="font-size:14px;">Father's Name :</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['fa_name']?>
                                  
                                    </td>
							</tr>
                    <tr><td></td><td></td><td><b style="font-size:14px;">Mother's Name :</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['ma_name']?>
                                  
                      
                    
                     <tr><td></td><td></td><td><b style="font-size:14px;">DOB  :</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['dob']?>
                                  
                                   </td>
							</tr>
                    
                   
                    <tr><td></td><td></td><td><b style="font-size:14px;">Gender :</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['gender']?>
                                  
                                    </td>
							</tr>
                     <tr><td></td><td></td><td><b style="font-size:14px;">Email :</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['email']?>
                                  
                                    </td>
							</tr>
    <tr><td></td><td></td><td><b style="font-size:14px;">Phone :</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['phone']?>
                                  
                                    </td>
							</tr>
                        <tr><td></td><td></td><td><b style="font-size:14px;">Parent Number :</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['p_phone']?>
                                  
                                    </td>
							</tr>
                        
                         <tr><td></td><td></td><td><b style="font-size:14px;">Home :</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['home']?>
                                  
                                    </td>
							</tr>
                                   
                                   
                         <tr><td></td><td></td><td><b style="font-size:14px;">Post:</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['post']?>
                                  
                                    </td>
							</tr>
                         <tr><td></td><td></td><td><b style="font-size:14px;">City :</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['city']?>
                                  
                                    </td>
							</tr>
                        <tr><td></td><td></td><td><b style="font-size:14px;">District :</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['district']?>
                                  
                                    </td>
							</tr>
                         <tr><td></td><td></td><td><b style="font-size:14px;">State :</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['state']?>
                                  
                                    </td>
							</tr>
                         <tr><td></td><td></td><td><b style="font-size:14px;">Pincode :</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['pin']?>
                                  
                                    </td>
							</tr>
                        <tr><td></td><td></td><td><b style="font-size:14px;">Visitor1 :</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['visitor1']?>
                                  
                                    </td>
							</tr>
                        <tr><td></td><td></td><td><b style="font-size:14px;">Visitor2 :</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['visitor2']?>
                                  
                                    </td>
							</tr>
                        <tr><td></td><td></td><td><b style="font-size:14px;">Password :</b></td><td style="font-size:14px;" align="center"><?php echo $fetch2['password']?>
                                  
                                    </td>
							</tr>
                       
                                  
                                  
                                  
                                
                                  
                                  
                    <tr></tr>

							<tr><td></td><td></td><td colspan=2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    

                                <a href="edit_profile.php?b=<?php echo $fetch2['Reg_id'];;?>"><font color="red"><b style="font-size:20px;">EDIT PROFILE</b></font></a></td>
                                


							</tr>
                        </td>
							
					<?php }  ?>

								<?php
						

						?>
                        
				</table>
    </center>
			</form>
                     
                    </div>

                    <?php

 $con=mysqli_connect("localhost","root","","hostel");
$sql22="select * from registration where username='$a10'";
$result=mysqli_query($con,$sql22);

?>
                    <h4 class="card-title"><b>Room Number</b></h4>

                            
              
              
                <table class="table table-hover table-striped" border="1">
                            <thead>
                                <th style="background-color:#F7CAC9;padding:8px">Name</th>
                                <th style="background-color:#F7CAC9;padding:8px">Room</th>
                                

                                 
                            </thead>

                    
                           
                            <?php
                            while($row=mysqli_fetch_array($result))
                            {
                                 $a=$row['f_name'];
                                    
                    $sql1="SELECT * FROM roomnum where f_name='$a'";
                    $result1=mysqli_query($con,$sql1);
                   $tt3=mysqli_fetch_array($result1);           
                   
                    
                        $row1=mysqli_num_rows($result1);      
                                  
?>
                    

                            <tbody>
                                <tr>
                                    
                                             
                                     <td><div class="f_name"><?php echo $row['f_name'];?></div></td>
                                    <?php
                                
                                   if($row1!=NULL)
                                    {
                                        ?> 
                                     <td><div class="room_num"><?php echo $tt3['room_num'];?></div></td>
                                    <?php
                                
    }
                                   
             ?>                       
                                              
                                             
                                    
                                </tr>
                              </tbody>
                      <?php }  ?>




              
              
                            </table>
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