<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
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
   Torneo
  </title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
     <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
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
      <a class="navbar-brand pt-0" href="./index.php">
        <img src="./assets/img/brand/torneo_logo3.png" width=400 height=200 class="navbar-brand-img" alt="...">
      </a>
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
              <a href="./index.php">
                <img src="./assets/img/brand/torneo_logo3.png">
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
     
        <!-- Navigation -->
      <ul class="navbar-nav ">
          <li class="nav-item  class=" active" ">
              <a class=" nav-link  " href=" ./index.php"> <i class="ni ni-tv-2 text-primary"></i> <b style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:15px;">Admin Home</b>
            </a>
          </li>
              <li class="nav-item">
            <a class="nav-link " data-target="#PageSubmenu9" data-toggle="collapse">
              <i  class="ni ni-single-02 text-white"></i> <b style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:15px;">User</b>
            </a>
            <ul class="collapse list-unstyled" id="PageSubmenu9" >
          <li class="nav-item">
            <a class="nav-link " href="#PageSubmenu3" data-toggle="dropdown">
                <i  class="ni ni-single-02 text-blue"></i><b style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;"> Approve User</b>
            </a>
              
              <!-- collapse -->
              <ul class="collapse list-unstyled" id="PageSubmenu3" >
              <li class="nav-item">
                  <a class="nav-link " href="team_approve.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:13px;" >Team</a></li>
                  <li><a class="nav-link " href="sponsor_approve.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:13px;" >Sponsor</a></li>
                     <li><a class="nav-link " href="club_approve.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:13px;">Club</a></li>
              </ul>
            </li>
         <li class="nav-item">
            <a class="nav-link " href="#PageSubmenu2" data-toggle="dropdown" >
                <i  class="ni ni-single-02 text-green"></i><b style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">  Active User</b>
            </a>
              <ul class="collapse list-unstyled" id="PageSubmenu2" >
              <li class="nav-item"><a class="nav-link " href="team_user.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:13px;" >Team</a></li>
                  <li><a class="nav-link " href="sponsor_user.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:13px;" >Sponsor</a></li>
                   <li><a class="nav-link " href="club_user.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:13px;" >Club</a></li>
              </ul>
          </li>
      <li class="nav-item">
            <a class="nav-link " href="#PageSubmenu1" data-toggle="dropdown">
                <i  class="ni ni-single-02 text-red" > </i><b style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">Blocked User</b>
            </a>
              <ul class="collapse list-unstyled" id="PageSubmenu1">
              <li class="nav-item"><a class="nav-link " href="view_blocked_user.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:13px;">Team</a></li>
                  <li><a class="nav-link " href="view_blocked_sponsor.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:13px;">Sponsor</a></li>
                   <li><a class="nav-link " href="view_blocked_club.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:13px;">Club</a></li>
              </ul>
          </li>
                </ul> 
            </li>
          <li class="nav-item">
            <a class="nav-link" href="tournament_view.php">
                <i class="ni ni-planet text-yellow"></i> <b style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:15px;">Tournament</b>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sponsorship.php">
                <i class="ni ni-bullet-list-67 text-red"></i> <b style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:15px;">Sponsorships</b>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  " href="events.php">
                <i class="ni ni-bullet-list-67 text-red"></i><b style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:15px;"> Events</b>
            </a>
          </li>
             
             <li class="nav-item">
            <a class="nav-link  active" href="#PageSubmenu0" data-toggle="collapse">
                <i class="ni ni-settings-gear-65"></i><b style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:15px;">Settings</b>
            </a>
              <ul class="collapse list-unstyled" id="PageSubmenu0">
              <li class="nav-item"><a class="nav-link " href="setting_ad.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">Change password</a></li>
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
          
              
          
              <?php

include "dbcontroller.php";
              $a1=$_GET['b'];
               $s="select * from state where id='$a1'";
    $res0=mysqli_query($con,$s);
       $res2=mysqli_fetch_array($res0);       
               $s2="select * from city where status!=8";
    $res=mysqli_query($con,$s2);
if(isset($_POST['submit']))
{
   
    $m1=$_POST['category'];
        $m=trim($m1);
      $a=strtoupper($m);
    //$a1=$_POST['category2'];
  if($a!="" && $a1!="")
{
     
    while($fetch=mysqli_fetch_array($res))
    {
        $s=$fetch['name'];
       
        if($s==$a)
        {
          echo "<script>";
       echo "alert('District already exists!');";
       echo "</script>"; 
             echo "<script>";
        echo("location.href='district_add.php'");
        echo"</script>";
              exit(); 
        }
         }
 $sq="insert into city(name,stateID,status)values('$a','$a1','1')";
   if(mysqli_query($con,$sq))
   {
       echo "<script>";
       echo "alert('district added successfully!');";
       echo "</script>";
        echo "<script>";
        echo("location.href='view_district.php'");
        echo"</script>";
   }
}
       
}
mysqli_close($con);
?>
        
<style>
 input,select
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

<center><h2 style="color:blue"><b style="font-size:25px;">ADD DISTRICT</b></h2></center>
<form method="POST" action="">
    <br><br>
				<table class="table table-striped"><tr><td>
                    <input type="text" name="category2" value="<?php echo $res2['name'];?>"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;District&nbsp;&nbsp;&nbsp;<input type="text" id="uname" name="category" required></td></tr>
                    <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><p id="p6" style="color:red;text-align:center"></p></b></td></tr>
                    <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="submit" name="submit"></td></tr>
				</table>
			</form>
<script>
                 $("#uname").on("blur", function() {
    if ( $(this).val().match('^[A-Z]{3,16}$') ) {
       $('#p6').hide();
   
        <?php
         while($fetch=mysqli_fetch_array($res))
    {
        $s=$fetch['name'];
       
       
                        ?>
        if( $(this).val().match('<?php echo $s;?>') )
            {
             $('#p6').show();
       $('#p6').text("*  District already exists.  *");
                 document.getElementById("uname").value="";
        $("#uname").focus();   
            }
        <?php
                        }
        ?>
    } else {
         $('#p6').show();
       $('#p6').text("* Use capital letter *");
        $("#uname").focus();
        document.getElementById("uname").value="";
        
    }
});
    </script>  
		
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