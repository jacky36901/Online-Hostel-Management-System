<?php
$con=mysqli_connect("localhost","root","","hostel") or die(mysqli_error());
if(isset($_POST['submit']))
{
$room=$_POST['room'];
$category=$_POST['category'];
$payment=$_POST['payment'];
mysqli_query($con,"INSERT INTO `payment` (`payment_id`, `room`, `category`, `payment`, `status`) VALUES (NULL, '$room', '$category', '$payment', '1')");
    
  }
mysqli_close($con);
?>


<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
  
  </title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-dark" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
       
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="./assets/img/brand/admin.png">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
          <a href="./index.php" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
            
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
             
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
       
        <!-- Navigation -->
       <ul class="navbar-nav ">
          <li class="nav-item  class=" active" ">
              <a class=" nav-link active " href=" ./index.php"> <i class="ni ni-tv-2 text-primary"></i> <b style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:15px;">Admin Home</b>
            </a>
          </li>
              <li class="nav-item">
            <a class="nav-link " data-target="#PageSubmenu9" data-toggle="collapse">
              <i  class="ni ni-single-02 text-white"></i> <b style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:15px;">User</b>
            </a>
                  <ul class="collapse list-unstyled" id="PageSubmenu9">
              <li class="nav-item"><a class="nav-link " href="view_students.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">View Students</a></li>
                     <li><a class="nav-link " href="settings_2.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">View Payment</a></li>
                         <li><a class="nav-link " href="settings_2.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">Refund Request</a></li>
              </ul>
           
            </li>
         
             
             <li class="nav-item">
            <a class="nav-link " href="#PageSubmenu0" data-toggle="collapse">
                <i class="ni ni-settings-gear-65"></i><b style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:15px;">Settings</b>
            </a>
              <ul class="collapse list-unstyled" id="PageSubmenu0">
              <li class="nav-item"><a class="nav-link " href="" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">Change password</a></li>
                     <li><a class="nav-link " href="settings_2.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">Manage category</a></li>
              </ul>
            </li>
        </ul>
        <!-- Divider -->
       
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.php">Admin Home</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
             
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="./assets/img/brand/admin.png">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="./index.php" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="settings.php" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
            
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-dark pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
             
            </div>
            <div class="col-xl-3 col-lg-6">
             
            </div>
            <div class="col-xl-3 col-lg-6">
              
            </div>
            <div class="col-xl-3 col-lg-6">
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-12 mb-2 mb-xl-0">
         
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                
              </div>
            </div>
          
              
              
<!--
              <?php

include "dbcontroller.php";
if(isset($_POST['submit']))
{
    $s="select * from payment ";
    $res=mysqli_query($con,$s);
   $m1=$_POST['category'];
    $m=trim($m1);
    $a=strtoupper($m);
  if($a!="")
{
     
    while($fetch=mysqli_fetch_array($res))
    {
        $s=$fetch['type'];
       
        if($s==$a)
        {
          echo "<script>";
       echo "alert('Game already exists!');";
       echo "</script>"; 
             echo "<script>";
        echo("location.href='game_add.php'");
        echo"</script>";
              exit(); 
        }
         }

 $sq="insert into games(id,type,status)values(NULL,'$a','1')";
   if(mysqli_query($con,$sq))
   {
       echo "<script>";
       echo "alert('game added successfully!');";
       echo "</script>";
         echo "<script>";
        echo("location.href='view_games.php'");
        echo"</script>";
   }
}
       
}
mysqli_close($con);
?>
        
-->
<style>
 input
                {
                   padding: 5px;
  width: 30%;
  font-size: 14px;
    border-radius: 5px;
        color:gray;
  font-family: Raleway;
  border: 1px solid #aaaaaa;  
                }
            </style>

<center><h2 style="color:blue"><b style="font-size:25px;">ADD PAYMENT </b></h2></center>
<form name="form1"  class="form" onsubmit="return validation()"  enctype="multipart/form-data"  style="max-width:500px; margin:auto" method="post">

  <br>
<br>

  
                                          <br>
    <!--<div class="row">
    <p><div class="day">DAY</div><select class="input-field col-md-12" type="text" placeholder=" " name="day" id="day"
    name="user_bio" id="user_bio"   onchange="validatetxt()"required>
        <option value="">--select--</option>
        <option value="sunday">Sunday</option>
        <option value="monday">Monday</option>
        <option value="tueday">Tuesday</option>
        <option value="wednessday">Wednessday</option>
        <option value="thursday">Thursday</option>
        <option value="friday">Friday</option>
        <option value="saturday">saturday</option>
        </select>
         

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="date"></label><br>
                                          

                                            </p>
                                          </div>--><br>
                   <div class="row">
    <p><div class="room">Room</div><Select class="input-field col-md-12" type="text" placeholder=" " name="room" id="room"
    name="room" id="room"   onchange="validatetxt()"required>
                       <option value="">--select--</option>
                        <option value="1">1</option>
                       </Select>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="room"></label><br>
                                          

                                            </p>
                                          </div>
<br>
              <br>
                                     <br>
                   <div class="row">
    <p><div class="category">Category</div><Select class="input-field col-md-12" type="text" placeholder=" " name="category" id="category"
    name="category" id="category"   onchange="validatetxt()"required>
                       <option value="">--select--</option>
                        <option value="2">2</option>
                       </Select>

			            <label class="errortext" style="display:nne; size:10PX; color:red" id="category"></label><br>
                                          

                                            </p>
                                          </div>

            <br>
          
 <div class="row">
    <p><div class="payment">Payment</div><input class="input-field col-md-12" type="text" placeholder="" name="payment" id="payment"
    name="payment" id="payment"   onchange="validatetxt()">
                   <p id="p1"></p>
              
          </div>
            <br>
<br>



    <div class="input-container">

      <button type="submit" class="btn btn-primary"name="submit"  value="POST"><b>POST</b></button>
 </div><br><br><br>
          <div>
              
</div>  
</div>
        </div>
      </div>
    </div>

</form>


		
</body>
</html>

              
              
              
          </div>
        </div>
      </div>
      <div class="row mt-5">
       
        <div class="col-xl-4">
         
        </div>
      </div>
      <!-- Footer -->
    
    </div>
  </div>
  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="./assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="./assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>