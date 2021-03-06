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
        <img src="./assets/img/brand/torneo_logo3.png" class="navbar-brand-img" alt="...">
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
            <a href="index.php" class="dropdown-item">
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
            <a class="nav-link " href="sponsorship.php">
                <i class="ni ni-bullet-list-67 text-red"></i> <b style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:15px;">Sponsorships</b>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  " href="events.php">
                <i class="ni ni-bullet-list-67 text-red"></i><b style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:15px;"> Events</b>
            </a>
          </li>
             
             <li class="nav-item">
            <a class="nav-link active" href="#PageSubmenu0" data-toggle="collapse">
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
$sql="select * from state where status=9";
$exe=mysqli_query($con,$sql);
?>
              <center><h2 style="color:blue"><b style="font-size:25px;">DISABLED STATE</b></h2></center>
<form method="POST">
    <br><br>
				<table class="table table-striped">
					<thead>
						<tr>
						<th  style="font-size:15px;"><b>STATE</b></th>
						
						<th></th>
						
                        </tr>

						</thead>
					<tbody>
						<?php
						while($fetch=mysqli_fetch_array($exe))
						{
							?>
						<tr>
							
							<td style="font-size:14px;"><?php echo $fetch['name']?></td>
                            	<td ><a href="enable_state.php?b=<?php echo $fetch['name'];?>">
                                <font color="red"><b style="font-size:14px;">enable</b></font></a></td>
							
							<td ><a href="delete_state.php?b=<?php echo $fetch['name'];?>">
                                <font color="red"><b style="font-size:14px;">delete</b></font></a></td>
							
							</tr>
							
					
								<?php
						}
mysqli_close($con);
						?>
					</tbody>
				</table>
			</form>

              
              
              
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