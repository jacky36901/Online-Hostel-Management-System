<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
include "dbcontroller.php";
$user=$_SESSION['sess'];
$a=$_GET['b'];
$sql90="select * from registration where status='1'";
$exe90=mysqli_query($con,$sql90);
if(isset($_POST['submit']))
{
    $email=$_POST["email"];
      $phone=$_POST["phone"];
      $home=$_POST["home"];
      $post=$_POST["post"];
      $city=$_POST["city"];
      $state=$_POST["state"];
      $pincode=$_POST["pincode"];
        $visitor1=$_POST["visitor1"];
        $visitor2=$_POST["visitor2"];
    
$sql78="update registration set email='$email',phone='$phone',home='$home',post='$post',city='$city',state='$state',visitor1='$visitor1',visitor2='$visitor2'";
    if(mysqli_query($con,$sql78))
    {
         echo "<script>";echo "alert('Successfully edited!')";echo"</script>";
         echo "<script>";
        echo("location.href='view_students.php'");
        echo"</script>";
    }
}
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
   Jyothi Nivas
  </title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.php">
       JYOTHI NIVAS
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
               <img alt="Image placeholder" src="./assets/img/brand/ad.png">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            
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
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./assets/img/brand/blue.png">
              </a>
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
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
                   <ul class="navbar-nav ">
          <li class="nav-item  class=" active" ">
          <a class=" nav-link active " href=" ./index.php"> <i class="ni ni-tv-2 text-primary"></i> Admin Home
            </a>
          </li>
         <li class="nav-item">
            <a class="nav-link " href="view_inmate22.php">
              <i  class="ni ni-single-02 text-green"></i>Inmate
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link " href="view_staff22.php">
              <i  class="ni ni-single-02 text-green"></i>Staff
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link " href="user_view.php">
              <i  class="ni ni-single-02 text-blue"></i>View Users
            </a>
          </li>
          <li>
            <a href="#pageSubmenu3" class="nav-link" data-toggle="collapse">
              <i class="ni ni-bullet-list-67 text-red"></i>
              <p>Schedule Events</p>
                </a>
              <ul class="collapse list-unstyled" id="pageSubmenu3">
        <li>
          <a href="norm.php" class="nav-link">Normal Days</a>
        </li>
                  <li>
          <a href="add_special.php" class="nav-link">Special Days</a>
        </li>
        

      </ul>
               <li>
            <a href="#pageSubmenu4" class="nav-link" data-toggle="collapse">
              <i class="ni ni-bullet-list-67 text-red"></i>
              <p>Notificatons</p>
                </a>
              <ul class="collapse list-unstyled" id="pageSubmenu4">
        <li>
          <a href="view_donation.php" class="nav-link">Donation Rquest</a>
        </li>
                  <li>
          <a href="view_event.php" class="nav-link">Event Request</a>
        </li>
                  <!-- <li>
          <a href="view_cash.php" class="nav-link">Amount Request</a>
        </li>-->
                  
        

      </ul>
<!--
                      <li>
            <a href="#pageSubmenu5" class="nav-link" data-toggle="collapse">
              <i class="ni ni-bullet-list-67 text-red"></i>
              <p>Add Reports</p>
                </a>
              <ul class="collapse list-unstyled" id="pageSubmenu5">
        <li>
          <a href="donationrep.php" class="nav-link">Donation-Report</a>
        </li>
                  <li>
          <a href="eventdetails.php" class="nav-link">Events-Report</a>
        </li>
                  
         <li>
          <a href="add_product.php" class="nav-link">Order-Details</a>
        </li> 
                  

      </ul>
                            <li>
            <a href="#pageSubmenu6" class="nav-link" data-toggle="collapse">
              <i class="ni ni-bullet-list-67 text-red"></i>
              <p>View Reports</p>
                </a>
              <ul class="collapse list-unstyled" id="pageSubmenu6">
        <li>
          <a href="donationrep_view.php" class="nav-link">Donation-Report</a>
        </li>
                  <li>
          <a href="eventrep_view.php" class="nav-link">Events-Report</a>
        </li>
                  
         <li>
          <a href="" class="nav-link">Order-Report</a>
        </li> 
                  

      </ul>
         
--><li class="nav-item">
                   <a class="nav-link" href="Report.php">
                       <i class="ni ni-settings-gear-65"></i>Reports</a>
              </li>
             <li class="nav-item">
                   <a class="nav-link" href="settings.php">
                       <i class="ni ni-settings-gear-65"></i>Settings</a>
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.php">ADMIN HOME</a>
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
          
<!--inner block start here-->

       
      <center>
       <form id="regForm" action="" method="post" >
   <?php
           while($fetch90=mysqli_fetch_array($exe90))
           {
           ?>
   <img src="../images/<?php echo $fetch90['photo']?>" width=220px height=220px/>
           <br>
           <br><label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="email" type="text" name="email" placeholder="New Email" value="<?php echo $fetch90['email'];?>" >
           
       
             <br>
           <br>    <label>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="phone" type="text" name="phone" placeholder="New phone" value="<?php echo $fetch90['phone'];?>" >
           
       
             <br>
            <br>    <label>Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="home" type="text" name="home" placeholder="New home" value="<?php echo $fetch90['home'];?>" >
           
      
             <br>
            <br>    <label>Post&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="post" type="text" name="post" placeholder="New post" value="<?php echo $fetch90['post'];?>" >
           
       
             <br>
            <br>    <label>City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="city" type="text" name="city" placeholder="New city" value="<?php echo $fetch90['city'];?>" >
      
             <br>
            <br>    <label>State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="state" type="text" name="state" placeholder="New state" value="<?php echo $fetch90['state'];?>" >
     
             <br>
            <br>    <label>Visitor1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="visitor1" type="text" name="visitor1" placeholder="New visitor1" value="<?php echo $fetch90['visitor1'];?>" >
      
             <br>
            <br>    <label>Visitor2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="visitor2" type="text" name="visitor2" placeholder="New visitor2" value="<?php echo $fetch90['visitor2'];?>" >
           
     
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
     <input id="submit" type="submit" name="submit" value="UPDATE" style="color:black;">
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
      <div class="row mt-5">
       
        <div class="col-xl-4">
         
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          
          
        </div>
      </footer>
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