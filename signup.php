<?php
session_start();
include 'engine/config.php';
if (isset($_SESSION['user'])) {
 header("location:news-feed.php");
}else{

  $msg = "";
        if(isset($_POST["signup"])){
            $email = $_POST['emailid'];
            $username = $_POST['username'];
            $checkEmail = mysqli_num_rows($conn->query("select * from users where email = '$email'"));
            $checkUsername = mysqli_num_rows($conn->query("select * from users where username = '$username'"));
            if($checkEmail>0){
               $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Email already exists.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
            }else if($checkUsername>0){
               $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Username already exists.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
            }else{
              $password1 = $_POST['password1'];
              $password2 = $_POST['password2'];
              if ($password2 != $password1) {
                $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Passwords are not equal
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
              }else{//echo "<script>alert('yes');</script>";
                $password = sha1($password1);
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $date = date("d-m-Y");
                $sql=$conn->query("insert into users(username, email, phone, password, name,regdate)values('$username', '$email', '$phone', '$password', '$name', '$date')");
                if ($sql) {
                   $msg = '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Successfully Registered, Regiirecting to Buzzeet
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        $_SESSION['user']=$email;
        header("location:news-feed.php");
                }
              }
            }
          }
}
?>
<!Doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Signup - Buzzeet</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in-page">
          <div id="container-inside">
              <div id="circle-small"></div>
              <div id="circle-medium"></div>
              <div id="circle-large"></div>
              <div id="circle-xlarge"></div>
              <div id="circle-xxlarge"></div>
          </div>
          <style type="text/css">
            
            .inside{
              margin-top:20px;
            }
            .bg-white{
              padding:20px;
            }
            .logo{
              width: 60px;
              align-content: center;
            }
          </style>
            <div class="container p-0">
                <div class="row no-gutters inside">
                   <div class="container-sm ">
                    <div class="bg-white">
                      <center> <div class="logo">
                       <img src="images/loader.png" class="logo">
                      </div>
                       <h3>signup</h3>
                    </center>

                        <form method="POST"><?php echo $msg;?>

                          <div class="form-group">
                          
                              <input type="text" name="username" onblur="checkUsernamelAvailability()" id="username" placeholder="Choose username" class="form-control">
                            <span id="user-username-availability-status" style="font-size:12px; color:black"></span> 
                          </div>
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Enter full name">
                          </div>
                          <div class="form-group">
                            <input type="email" name="emailid" onBlur="checkemailAvailability()" id="emailid"class="form-control" placeholder="Email Address">
                            <span id="user-email-availability-status" style="font-size:12px; color:black"></span> 
                          </div>
                          <div class="form-group">
                            <input type="number" name="phone" class="form-control" placeholder="phone">
                          </div>
                          <style type="text/css">
                            .text-danger{
                              color:red;
                            }
                            .text-success{
                              color: green;
                            }
                          </style>
                           <script>
                              function onsel(){
                                var password1 = document.getElementById("password1").value;
                                var password2 = document.getElementById("password2").value;
                                var message = document.getElementById('password_error');
                                var button = document.getElementById('button').disabled;
                               if (password1=='') {
                              message.innerHTML="Password can't be empty";
                              message.class="text-danger"
                               }else if (password2=='') {
                                message.innerHTML=" Confirm Password can't be empty";
                                message.class="text-danger"
                                button='true';
                               }else if (password2 != password1) {
                                message.innerHTML=" Passwords do not match";
                                message.class="text-danger"
                                button="true";
                               }else{
                                message.innerHTML="password matched";
                                message.class = "text-success"
                                button="false";
                               }
                          }
                          </script>
                          <div class="form-group">
                            <input type="password" name="password1" id="password1"  class="form-control" placeholder="password" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <input type="password" name="password2" id="password2" onkeyup="onsel()" class="form-control" placeholder="confirm Password" autocomplete="off">
                            <span class="" id="password_error"></span>
                          </div>
                          <input type="submit" name="signup" class="btn btn-primary" id="button"  value="Signup">
                        </form>
                 
                  </div>
                </div>
            </div><div class="form">
              <form>
                <div class="form-group">
                </div>
              </form>
        </section>
        <script>
      
//This function checks email-availability-status

function checkemailAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-email-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}

function checkUsernamelAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check.php",
data:'username='+$("#username").val(),
type: "POST",
success:function(data){
$("#user-username-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}

function checkidAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'idno='+$("#idno").val(),
type: "POST",
success:function(data){
$("#user-id-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}

//Finally add a function that will check if password 1 and password 2 match, It is called by the form using |onSubmit="return valid();"|
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}

</script>
        <!-- Sign in END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="js/wow.min.js"></script>
      <!-- lottie JavaScript -->
      <script src="js/lottie.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="js/apexcharts.js"></script>
      <!-- Slick JavaScript -->

      <script src="js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="js/smooth-scrollbar.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
   </body>

<!-- Mirrored from iqonic.design/themes/socialv/html/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 17:02:24 GMT -->
</html>
