<?php
$con=mysqli_connect("localhost","root","","hostel") or die(mysqli_error());
if(isset($_POST['submit']))
{
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$fa_name=$_POST['fa_name'];
$ma_name=$_POST['ma_name'];
$dob=$_POST['dob'];

    $email=$_POST['email'];
    $phone=$_POST['phone'];
     $p_phone=$_POST['p_phone'];
$home=$_POST['home'];
    $post=$_POST['post'];
$city=$_POST['city'];
    $district=$_POST['district'];
$state=$_POST['state']; 
$pin=$_POST['pin'];
   
$joinc=$_POST['joinc'];
  $join=$_POST['join'];  
    $visitor1=$_POST['visitor1'];
    $visitor2=$_POST['visitor2'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$filename = $_FILES["photo"]["name"];
move_uploaded_file($_FILES["photo"]["tmp_name"], "../images/" . $filename);
    
 $sql=mysqli_query($con,"INSERT INTO `registration` (`Reg_id`, `f_name`, `l_name`, `fa_name`, `ma_name`, `dob`, `email`, `phone`, `p_phone`, `home`, `post`, `city`, `district`, `state`, `pin`,`joinc`, `join`, `visitor1`, `visitor2`, `username`, `password`, `confirmpassword`, `utype`, `status`, `book`, `photo`) VALUES (NULL, '$f_name', '$l_name', '$fa_name', '$ma_name', '$dob','$email', '$phone', '$p_phone', '$home', '$post', '$city', '$district', '$state', '$pin', '$joinc', '$join', '$visitor1', '$visitor2', '$username', '$password', '$confirmpassword', '2', '1', '0', '$filename')");
    

 mysqli_query($con,"INSERT INTO `login` (`log_id`, `username`,`email`, `password`, `utype`, `status`) VALUES ('NULL', '$username','$email', '$password', '2', '1')");
    $sql1="select * from registration";
   $result=mysqli_query($con,$sql1);
    $row=mysqli_num_rows($result);
    
  if($sql==true)
  { ?>
          <script>
          alert("Registration Successfully Completed!!!");
              echo("location.href='../index.php'");

</script>
 

          <?php


  }
  else {
    ?>
            <script>
            alert("Registration failed!!!");

            </script>
            <?php
    echo mysqli_connect_error();

  }


  }
if(isset($_POST['submit1']))
{
    echo "<script>";
       echo("location.href='../index.php'");
       echo "</script>";
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register Forms</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
 <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
 <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="formvalid.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
   

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="formvalid.js"></script>
    
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
</head>

<body>
    <div class="section colm colm6"><form method="post" action="">
                                <input type="submit" value="LOGIN NOW" class="submit1" name="submit1" id="submit1" style="position:relative;background-color:green;color:white;size:10;font-size:200%;"/></form>
                            </div>
    
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST" action="" class="register-form" id="register-form" enctype="multipart/form-data">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" id="f_name" name="f_name">
                                     <p id="p1"></p>
                 <script>
                     $("#f_name").on("blur", function() {
                     if ( $(this).val().match("^[A-za-z' ']{1,30}$") ) {
                     $('#p1').hide();
                     } else {
                     $('#p1').show();
                     $('#p1').text("* please enter a valid name *");
                     $("#f_name").focus();
        
                     }
                     });
                </script>    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" id="l_name" name="l_name">
                                    <p id="p12"></p>
                 <script>
                     $("#l_name").on("blur", function() {
                     if ( $(this).val().match("^[A-za-z' ']{1,30}$") ) {
                     $('#p12').hide();
                     } else {
                     $('#p12').show();
                     $('#p12').text("* please enter a valid name *");
                     $("#l_name").focus();
        
                     }
                     });
                </script>    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Father's name</label>
                                    <input class="input--style-4" type="text" id="fa_name" name="fa_name">
                                    <p id="p11"></p>
                 <script>
                     $("#fa_name").on("blur", function() {
                     if ( $(this).val().match("^[A-za-z' ']{1,30}$") ) {
                     $('#p11').hide();
                     } else {
                     $('#p11').show();
                     $('#p11').text("* please enter a valid name *");
                     $("#fa_name").focus();
        
                     }
                     });
                </script>    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mother's name</label>
                                    <input class="input--style-4" type="text" id="ma_name" name="ma_name">
                                    <p id="p31"></p>
                 <script>
                     $("#ma_name").on("blur", function() {
                     if ( $(this).val().match("^[A-za-z' ']{1,30}$") ) {
                     $('#p31').hide();
                     } else {
                     $('#p31').show();
                     $('#p31').text("* please enter a valid name *");
                     $("#ma_name").focus();
        
                     }
                     });
                </script>    
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="date" id="dob" name="dob" required>
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
<!--
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" id="male"  value="male"  name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" id="female"  value="female" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
-->
                       
<!--                        <div class="row row-space">-->
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" id="email" name="email" required >
                                    <p id="p88"></p>
 <script>
                 $("#email").on("blur", function() {
    if ( $(this).val().match('^([a-zA-Z0-9_\.\-]{4,16})+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,3})+$') ) {
       $('#p88').hide();
    } else {
         $('#p88').show();
       $('#p88').text("*  Please enter valid email  *");
         $("#email").focus();
    }
});
    </script>  
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" id="phone" name="phone" required >
                                     <p id="p9"></p>
              <script>
                 $("#phone").on("blur", function() {
                if ( $(this).val().match(/^(?!(\d)\1{9})(?!0123456789|1234567890|0987654321|0000000000|1111111111|22222222222|3333333333|4444444444|5555555555|6666666666|7777777777|8888888888|9999999999|1000000000|2000000000|3000000000|40000000000|5000000000|6000000000|7000000000|8000000000|9000000000)\d{10}$/) ) {
                $('#p9').hide();
                } else {
                $('#p9').show();
                $('#p9').text("* please enter a valid mobile number *");
                $("#phone").focus(); }});
            </script>  
                                </div>
                            </div>
                              <div class="input-group">
                                    <label class="label">Parent Number</label>
                                    <input class="input--style-4" type="text" id="p_phone" name="p_phone">
                                     <p id="p99"></p>
              <script>
                 $("#p_phone").on("blur", function() {
                if ( $(this).val().match(/^(?!(\d)\1{9})(?!0123456789|1234567890|0987654321|0000000000|1111111111|22222222222|3333333333|4444444444|5555555555|6666666666|7777777777|8888888888|9999999999|1000000000|2000000000|3000000000|40000000000|5000000000|6000000000|7000000000|8000000000|9000000000)\d{10}$/) ) {
                $('#p99').hide();
                } else {
                $('#p99').show();
                $('#p99').text("* please enter a valid mobile number *");
                $("#p_phone").focus(); }});
            </script>  
                                </div>
                            </div>
                    
                       
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Address for Communication</label>
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">     </label>
                                    <label class="label">House Name</label>
                                    <input class="input--style-4" type="textarea" id="home" name="home">
                                    <p id="p13"></p>
               <script>
                 $("#home").on("blur", function() {
                 if ( $(this).val().match("[a-zA-z]+([ '-][a-zA-Z]+)*")) {
                 $('#p13').hide(); 
                 } else {
                 $('#p13').show();
                 $('#p13').text("* enter valid house name *");
                 $("#home").focus();
                 }});
                </script>
                                </div>
                                <div class="input-group">
                                    <label class="label">     </label>
                                    <label class="label">Post Office</label>
                                    <input class="input--style-4" type="textarea" id="post" name="post">
                                    <p id="p14"></p>
               <script>
                 $("#post").on("blur", function() {
                 if ( $(this).val().match("[a-zA-z]+([ '-][a-zA-Z]+)*")) {
                 $('#p14').hide(); 
                 } else {
                 $('#p14').show();
                 $('#p14').text("* enter valid house name *");
                 $("#post").focus();
                 }});
                </script>
                                </div>
                                <div class="input-group">
                                    
                                    <label class="label">City</label>
                                    <input class="input--style-4" type="textarea" id="city" name="city">
                                     <p id="p15"></p>
               <script>
                 $("#city").on("blur", function() {
                 if ( $(this).val().match("[a-zA-z]+([ '-][a-zA-Z]+)*")) {
                 $('#p15').hide(); 
                 } else {
                 $('#p15').show();
                 $('#p15').text("* enter valid house name *");
                 $("#city").focus();
                 }});
                </script>
                                </div>
                                <div class="input-group">
                                    
                                    <label class="label">District</label>
                                    <input class="input--style-4" type="text" id="district" name="district">
                                     <p id="p115"></p>
               <script>
                 $("#district").on("blur", function() {
                 if ( $(this).val().match("[a-zA-z]+([ '-][a-zA-Z]+)*")) {
                 $('#p115').hide(); 
                 } else {
                 $('#p115').show();
                 $('#p115').text("* enter valid house name *");
                 $("#district").focus();
                 }});
                </script>
                                </div>
                                <div class="input-group">
                                    
                                    <label class="label">State</label>
                                    <input class="input--style-4" type="textarea" id="state" name="state">
                                      <p id="p16"></p>
                                  <script>
                 $("#state").on("blur", function() {
                 if ( $(this).val().match("[a-zA-z]+([ '-][a-zA-Z]+)*")) {
                 $('#p16').hide(); 
                 } else {
                 $('#p16').show();
                 $('#p16').text("* enter valid house name *");
                 $("#state").focus();
                 }});
                </script>  
                                </div>
                                <div class="input-group">
                                    
                                    <label class="label">Pincode</label>
                                    <input class="input--style-4" type="textarea" id="pin" name="pin">
                                </div>
                            </div>
                            
                            
                        </div>
                        
                        <div class="input-group">
                            <label class="label">Highest Qualification</label>
                           
                                <select name="hiqh">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="High School">High School</option>
                                    <option value="Intermediate">Intermediate</option>
                                    <option value="Graduation">Graduation</option>
                                    <option value="Post Graduation">Post Graduation</option>
                                </select>
                                
                            </div>
                        <div class="input-group">
                                    <label class="label">     </label>
                                    <label class="label">Joining College Name</label>
                                    <input class="input--style-4" type="textarea" id="joinc" name="joinc">
                                    <p id="p76"></p>
               <script>
                 $("#joinc").on("blur", function() {
                 if ( $(this).val().match("[a-zA-z]+([ '-][a-zA-Z]+)*")) {
                 $('#p76').hide(); 
                 } else {
                 $('#p76').show();
                 $('#p76').text("* enter valid college name *");
                 $("#joinc").focus();
                 }});
                </script>
                                </div>
                         <div class="input-group">
                                    <label class="label">     </label>
                                    <label class="label">Joining Course</label>
                                    <input class="input--style-4" type="textarea" id="join" name="join">
                                    <p id="p77"></p>
               <script>
                 $("#join").on("blur", function() {
                 if ( $(this).val().match("[a-zA-z]+([ '-][a-zA-Z]+)*")) {
                 $('#p77').hide(); 
                 } else {
                 $('#p77').show();
                 $('#p77').text("* enter valid course name *");
                 $("#join").focus();
                 }});
                </script>
                                </div>
                   
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Visitors Names</label>
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">1.</label>
                                    <input class="input--style-4" type="text" id="visitor1" name="visitor1">
                                    <p id="p19"></p>
               <script>
                 $("#visitor1").on("blur", function() {
                 if ( $(this).val().match("[a-zA-z]+([ '-][a-zA-Z]+)*")) {
                 $('#p19').hide(); 
                 } else {
                 $('#p19').show();
                 $('#p19').text("* enter valid  name *");
                 $("#visitor1").focus();
                 }});
                </script>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"></label>
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">2.</label>
                                    <input class="input--style-4" type="text" id="visitor2" name="visitor2">
                                    <p id="p20"></p>
               <script>
                 $("#visitor2").on("blur", function() {
                 if ( $(this).val().match("[a-zA-z]+([ '-][a-zA-Z]+)*")) {
                 $('#p20').hide(); 
                 } else {
                 $('#p20').show();
                 $('#p20').text("* enter valid  name *");
                 $("#visitor2").focus();
                 }});
                </script>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                                    <label class="label">Username</label>
                                    <input class="input--style-4" type="text" id="username" name="username">
                           <p id="p29"></p>
               <script>
                 $("#username").on("blur", function() {
                 if ( $(this).val().match("[a-zA-z]+([ '-][a-zA-Z]+)*")) {
                 $('#p29').hide(); 
                 } else {
                 $('#p29').show();
                 $('#p29').text("* enter valid  username *");
                 $("#username").focus();
                 }});
                </script>
                                </div>
                        <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password"  id="password" name="password">

                
 <p id="p7"></p>
       <script>
                 $("#password").on("blur", function() {
    if ( $(this).val().match('^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})') ) {
       $('#p7').hide();
    } else {
         $('#p7').show();
       $('#p7').text("*Must contain at least one number and one uppercase and lowercase letter and special character, and at least 8 or more characters*");
       
        
    }
});
    </script> 


                                </div>
                        <div class="input-group">
                                    <label class="label">Confirm Password</label>
                                    <input class="input--style-4" type="password" id="confirmpassword" name="confirmpassword" onblur="return Validate()" required>
                           <br>
      <script type="text/javascript">
 function Validate() {
        var password = document.getElementById("confirmpassword").value;
        var confirmPassword = document.getElementById("password").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            document.getElementById("confirmpassword").value="";
         
        }
        return true;
    }
</script>
                                </div>
                        <div class="input-group">
    <img id="blah" src="#" alt="your image" /><br>
  <input id="photo" type='file' onchange="readURL(this); fileCheck(this);" name="photo" class="file_upload1" required/>
      <p id="op"></p>
<script type="text/javascript">
      function fileCheck(obj) {
              var fileExtension = ['jpeg', 'jpg', 'png'];
              if ($.inArray($(obj).val().split('.').pop().toLowerCase(), fileExtension) == -1)
              {
                   $("#op").html('Only .jpeg,.jpg,.png formats are allowed..!');
              document.getElementById('photo').value="";
            
           
              return false;
            }
              else
              {
                  $("#op").html("");
                return true;
              }
          
      }
</script>
       
       <br><br>
                                          </div>
                        <div class="form-submit">
                            
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit"style="position:relative;background-color:red;color:white;" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->