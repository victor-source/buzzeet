<?php
session_start();
include 'engine/config.php';
if (isset($_SESSION['user'])) {
 header("location:news-feed.php");
}else{
  if(isset($_POST['signup'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];

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

                        <form>

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
                          <div class="form-group">
                            <input type="password" name="password1" class="form-control" placeholder="password">
                          </div>
                          <div class="form-group">
                            <input type="password" name="password2" class="form-control" placeholder="confirm Password">
                          </div>
                          <input type="submit" name="signup" class="btn btn-primary" value="Signup">
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
