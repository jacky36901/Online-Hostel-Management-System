<?php
session_start();
include('dbcontroller.php');
$sql="SELECT * FROM refund where status='2'";
$result=mysqli_query($con,$sql);

$sql1="SELECT * FROM registration where utype='1'";
$result1=mysqli_query($con,$sql1);
?>



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
            <a href="index.php" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="settings_2.php" class="dropdown-item">
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
                       <li><a class="nav-link " href="settings_2.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">Manage Facility</a></li>
                      <li><a class="nav-link " href="room_num.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">Add Room Number</a></li>
              <li class="nav-item"><a class="nav-link " href="view_students1.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">View Students</a></li>
                     <li><a class="nav-link " href="payment_view.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">View Bookings</a></li>
                    
                         <li><a class="nav-link " href="refund_request.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">Refund Request</a></li>
                      
                      
              </ul>
           
            </li>
            <li class="nav-item">
            <a class="nav-link " data-target="#PageSubmenu99" data-toggle="collapse">
              <i  class="ni ni-single-02 text-white"></i> <b style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:15px;">Report</b>
            </a>
                  <ul class="collapse list-unstyled" id="PageSubmenu99">
                       
                      
             
                     
                      <li><a class="nav-link " href="search_cust.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">Booking Report</a></li>
                         
                       <li><a class="nav-link " href="search_cust1.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">Payment Report</a></li>
                      <li><a class="nav-link " href="REFUND_REPORT_VIEW.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">Refund Report</a></li>
              </ul>
           
            </li>
         
         
             
             <li class="nav-item">
            <a class="nav-link " href="#PageSubmenu0" data-toggle="collapse">
                <i class="ni ni-settings-gear-65"></i><b style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:15px;">Settings</b>
            </a>
              <ul class="collapse list-unstyled" id="PageSubmenu0">
              <li class="nav-item"><a class="nav-link " href="change.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">Change password</a></li>
                    
                   <li><a class="nav-link " href="enquiries_view.php" style="color:white;font-family: Arial, Helvetica, sans-serif;font-size:14px;">Enquiries</a></li>
              </ul>
            </li>
        </ul>
       
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
                   <div class="card-header ">
              <h4 class="card-title"><b>REFUND ACCEPTED STUDENTS</b></h4>

                            
              
              
                <table class="table table-hover table-striped">
                            <thead>
                                <th>Name</th>
                                 <th>Check-in-Date</th>
                                <th>Check-in-Out</th>
                                <th>Payment</th>
                                

                                <!-- <th>Password</th> -->
                            </thead>
                    <?php
                            while($row=mysqli_fetch_array($result1))
                            {
                            }
                    ?>
                            <?php
                     $sum=0;
                            while($row=mysqli_fetch_array($result))
                            {
                                 $sum=$sum+$row['payment1'];
                                  $a=$row['f_name'];
                                   
                    $sql2="SELECT * FROM booking where f_name='$a'";
                    $result2=mysqli_query($con,$sql2);
                    $tt3=mysqli_fetch_array($result2);
                    $checkin=$tt3['checkin'];
                     $checkout=$tt3['checkout'];            
                              ?>



                            <tbody>
                                <tr>
                                     <td><div class="f_name"><?php echo $row['f_name'];?></div></td>
                                    
                                <td><div class="checkin"><?php echo $tt3['checkin'];?></div></td>
                                    <td><div class="checkout"><?php echo $tt3['checkout'];?></div></td>

                                              <td><div class="payment1"><?php echo $row['payment1'];?></div></td>
<!--                                              <td style="font-size:14px;"><a href="../colorlib-regform-4/paymentad.php?b=<?php echo $row['f_name'];?>">Pay Now</a></td>-->
                                            
                                    
                                </tr>
                              </tbody>
                      <?php }  ?>


              
              
                            </table>
                        <br><br>
                       <center><p>Total Amount= <?php echo $sum;?></p></center>
              </div>

              
              
              
              
              
              
              
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