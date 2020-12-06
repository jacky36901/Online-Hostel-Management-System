<?php
 session_start();
    include "user/dbcontroller.php";
    // $con=mysqli_connect("localhost","root","","hostel") or die(mysqli_error());
 $a10=$_SESSION['sess'];
    $yu="select * from registration where username='$a10'";
    $tt=mysqli_query($con,$yu);

$tt2=mysqli_fetch_array($tt);
     $f_name=$tt2['f_name'];
$book=$tt2['book'];
//   $aa2="select * from category where category='AC'";
//    $bb2=mysqli_query($con,$aa2);

//$cc2=mysqli_fetch_array($bb2);
//   $aa22="select * from category where category='NONAC'";
//    $bb22=mysqli_query($con,$aa22);
//
//$cc22=mysqli_fetch_array($bb22);
 
   $aa="select * from rooms where room='SINGLE'";
    $bb=mysqli_query($con,$aa);

$cc=mysqli_fetch_array($bb);

   $aa1="select * from rooms where room='DOUBLE'";
    $bb1=mysqli_query($con,$aa1);

$cc1=mysqli_fetch_array($bb1);
   if(isset($_POST['submit']))
    {
        $room=$_POST['room'];
    $category=$_POST['category'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $payment1=$_POST['payment1'];
        if($room==2)
        {
            
           
    if($book==0)
    { 
        
         $cou=$cc['cou'];
        
if($cou!=0)
{
 $aop=$cou-1;
    }
else
{
    $aop=0;
}
        
        if($aop==0)
        {
            echo"<script>";
          echo'alert("Single Rooms & Category Filled!!!")';
echo "</script>";
        }
        else
        {
           mysqli_query($con,"UPDATE rooms SET cou='$aop' where room='SINGLE'");  
             
        
         $sql3="INSERT INTO booking (f_name,room,category,checkin,checkout,payment1,status) VALUES ('$f_name','$room', '$category', '$checkin', '$checkout', '$payment1', 0)";
    mysqli_query($con,$sql3);
    mysqli_query($con,"UPDATE registration SET book='1' where f_name='$f_name'");  
   echo "<script>";
       echo("location.href='colorlib-regform-4/pay.php'");
       echo "</script>";
        }
        
    }
            else
{
    echo"<script>";
          echo'alert("Alreday booked!!!")';
echo "</script>";
            
    
        
}
        
    }
        else
        {
                   
    if($book==0)
    { 
        
         $cou1=$cc1['cou'];
if($cou1!=0)
{
 $aop1=$cou1-1;
    }
else
{
    $aop1=0;
}
        if($aop1==0)
        {
            echo"<script>";
          echo'alert("Double Rooms & Category Filled!!!")';
echo "</script>";
        }
        else
        {
           mysqli_query($con,"UPDATE rooms SET cou='$aop1' where room='DOUBLE'");  
          
       
         $sql31="INSERT INTO booking (f_name,room,category,checkin,checkout,payment1,status) VALUES ('$f_name','$room', '$category', '$checkin', '$checkout', '$payment1', 20)";
    mysqli_query($con,$sql31);
    mysqli_query($con,"UPDATE registration SET book='1' where f_name='$f_name'");  
   echo "<script>";
       echo("location.href='colorlib-regform-4/pay.php'");
       echo "</script>";
            }
        
    }
            else
{
    echo"<script>";
          echo'alert("Alreday booked!!!")';
echo "</script>";
            
    
        
}
      
        }
    }

 

    // mysqli_close($con);
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
                                    <li class="active"><a href="rooms.php">Home</a></li>
                                    
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
                       
                        <h2 class="title">Book Now</h2>
                    
                        <form method="post" action="" style="display:block;border:2px;background-color:#DFCFBE">

                            <div class="input-group">
                                 <label for="children" class="field-label">User                 </label>
                                <label for="children" class="field prepend-icon">
                                    <input type="text" id="f_name" name="f_name" value="<?php echo $tt2['f_name']; ?>"  class="gui-input" required="" style="position:relative;left:480px;" >
                                </label>
                            </div>

                            
                                <div class="input-group">
                                    <label class="label">Room</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <?php
                                            $sql1="SELECT * FROM rooms WHERE status=1";
                                            $res1=mysqli_query($con,$sql1)or die(mysqli_error($con));
                                        ?>
                                        <select name="room" id="room" onchange="doSelect()" style="position:relative;left:472px;">
                                            <option value="">Select Room</option>
                                            <?php
                                                while($row1=mysqli_fetch_array($res1)){
                                                    echo "<option value='".$row1['room_id']."'>".$row1['room']."</option>";
                                                }
                                            ?>
                                                
                                            <!-- <option value="single">Single</option>
                                            <option value="double">Double</option> -->
                                    
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                            </div>
                        <div class="input-group">
                                    <label class="label">Category</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <?php
                                            $sql2="SELECT * FROM category WHERE status=1";
                                            $res2=mysqli_query($con,$sql2)or die(mysqli_error($con));
                                        ?>
                                        <select name="category" id="category" onchange="doSelect()" style="position:relative;left:451px;">
                                            <option value="">Select category</option>
                                            <?php
                                                while($row2=mysqli_fetch_array($res2)){
                                                    echo "<option value='".$row2['cat_id']."'>".$row2['category']."</option>";
                                                }
                                            ?>
                                            <!-- <option value="ac">AC</option>
                                            <option value="nonac">NON</option> -->
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                            </div>
                                     <div class="input-group">
                                    <label for="checkin" class="field-label">Check-in Date</label>
                                    <label for="checkin" class="field prepend-icon">
                                        <input type="date" id="checkin" name="checkin" class="gui-input"  placeholder="mm/dd/yyyy" onchange="doCalculate()" style="position:relative;left:415px;">
                                         
                                    </label>
                            </div>
                                     <div class="input-group">
                                    <label for="checkout" class="field-label">Check-out Date</label>
                                    <label for="checkout" class="field prepend-icon">
                                        <input type="date" id="checkout" name="checkout" class="gui-input"  placeholder="mm/dd/yyyy" onchange="doCalculate()" style="position:relative;left:407px;">
                                        
                                    </label>
                                </div>
                         
                          
                                    <div class="input-group">
                                <label for="children" class="field-label">Payment</label>
                                <label for="children" class="field prepend-icon">
                                    <input type="text" id="payment1" name="payment1" class="gui-input" required="" placeholder="payment" style="position:relative;left:452px;">
                                    <input type="hidden" name="tempPayment" id="tempPayment">
                                </label>
                            </div>
 
                            <div class="section colm colm6">
                                <input type="submit" value="Pay Now" class="submit" name="submit" id="submit" style="position:relative;background-color:red;color:white;"/>
                            </div>
                            <div class="frm-row">
                                <div class="option-group field">        
                                </div>
                            </div>
                        </form>
                        <script type="text/javascript">
                            function doCalculate() {
                                var date1=document.getElementById('checkin').value;
                                if(date1==""){
                                    alert("select check in date.........!");
                                }else{
                                    var date2=document.getElementById('checkout').value;
                                    if(date2==""){
                                        alert("select checkout date.........!");
                                    }else{
//                                        doSelect();
                                        var sum=parseInt(document.getElementById('tempPayment').value);
//                                        alert(sum);
                                        var total=0;
                                        var date3 = new Date(date1);
                                        var date4 = new Date(date2);
                                        var diffDays = parseInt((date4 - date3) / (1000 * 60 * 60 * 24), 10); 
                                        var Difference_In_Time = date4.getTime() - date3.getTime();
                                        var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
//                                        alert(Difference_In_Days);
                                        if(Difference_In_Days > 1){
//                                            alert(sum);
//                                            alert(Difference_In_Days);
                                            total=sum*Difference_In_Days;
//                                            alert(total);
//                                            document.getElementById('payment1').value=total;
                                        } else{
                                            total=sum;
                                        }
                                        document.getElementById('payment1').value=total;
                                    }
                                }
                            }
                            function doSelect(){
                                var room_id=document.getElementById('room').value;
                                if(room_id==""){
                                    alert("select an option.........!");
                                }else{
                                    var category_id=document.getElementById('category').value;
                                    if(category_id==""){
                                        alert("select a category.........!");
                                    }else{
                                        $.ajax({
                                            type: "POST",
                                            url: "./roomSelectAction.php",
                                            data:{roomId:room_id,
                                                categoryId:category_id},
                                            success: function(data){
                                                document.getElementById('payment1').value=data;
                                                document.getElementById('tempPayment').value=data;
                                                doCalculate();
                                            }
                                        });
                                    }
                                }     
                            }
                        </script>
                    </div>
                </div>  
                <?php

$sql="SELECT * FROM booking where f_name='$f_name'";
$result=mysqli_query($con,$sql);

?>
                    <h4 class="card-title"><b>Booking details</b></h4>

                            
              
              
                <table class="table table-hover table-striped" border="1">
                            <thead>
                                <th style="background-color:#9A8B4F;padding:8px">Name</th>
                                <th style="background-color:#9A8B4F;padding:8px">Room</th>
                                <th style="background-color:#9A8B4F;padding:8px">Category</th>
                                <th style="background-color:#9A8B4F;padding:8px">Check-in-date</th>
                                <th style="background-color:#9A8B4F;padding:8px">Check-out-date</th>
                                <th style="background-color:#9A8B4Fv;padding:8px">Payment</th>
                                

                                <!-- <th>Password</th> -->
                            </thead>

                    
                           
                            <?php
                            while($row=mysqli_fetch_array($result))
                            {
                              
                                   $a=$row['room'];
                                    $b=$row['category'];
                    $sql1="SELECT * FROM rooms where room_id='$a'";
                    $result1=mysqli_query($con,$sql1);
                    $tt3=mysqli_fetch_array($result1);
                    $room=$tt3['room'];
                                $sql2="SELECT * FROM category where cat_id='$b'";
                                $result2=mysqli_query($con,$sql2);
                                $tt4=mysqli_fetch_array($result2);
                                $category=$tt4['category'];
?>
                    

                            <tbody>
                                <tr>
                                     <td><div class="f_name"><?php echo $row['f_name'];?></div></td>
                                    
                                

                                    
                                              <td><div class="room"><?php echo $tt3['room'];?></div></td>
                                    <td><div class="category"><?php echo $tt4['category'];?></div></td>

                                    
                                    <td><div class="checkin"><?php echo $row['checkin'];?></div></td>
                                    <td><div class="checkout"><?php echo $row['checkout'];?></div></td>
                                    <td><div class="payment1"><?php echo $row['payment1'];?></div></td>
                                              
                                             
                                    
                                </tr>
                              </tbody>
                      <?php }  ?>



              
              
                            </table>
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