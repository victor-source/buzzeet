<?php
session_start();
if (!isset($_SESSION['user'])) {
   header("location:signin.php");
}else{
   $email = $_SESSION['user'];
   include 'engine/config.php';
   
   if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $city = $_POST['city'];
      $gender = $_POST['gender'];
      $dateofbirth = $_POST['dateofbirth'];
      $marital_status = $_POST['marital_status'];
      $country = $_POST['country'];
      $state = $_POST['state'];
      $address = $_POST['address'];
      $sql = $conn->query("update users set name = '$name', city='$city', gender='$gender', dateofbirth = '$dateofbirth', marital_status = '$marital_status', country='$country', state='$state', address = '$address' where email='$email' ");

   }
   if(isset($_POST['upload'])) {
      $path= "uploads/profile";
      $file = $path .basename($_FILES['photo']['name']);

      $fileType= pathinfo($file, PATHINFO_EXTENSION);
      $allowType= array('jpg', 'png', 'jpeg');
      if(in_array($fileType, $allowType)){
      if(move_uploaded_file($_FILES['photo']['tmp_name'], $file) ){
         $sql = $conn->query("update users set profile_photo='$file' where email='$email'");
      }
   }
   }
   $show = mysqli_fetch_array($conn->query("select * from users where email='$email'"));
}

?>
<?php include 'includes/sidebar.php';?>
         <!-- TOP Nav Bar -->
         <?php include 'includes/topbar.php';?>
         <!-- TOP Nav Bar END -->
         <!-- Right Sidebar Panel Start-->
         <div class="right-sidebar-mini right-sidebar">
            <div class="right-sidebar-panel p-0">
               <div class="iq-card shadow-none">
                  <div class="iq-card-body p-0">
                     <div class="media-height p-3">
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-50" src="images/user/01.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Anna Sthesia</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-50" src="images/user/02.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Paul Molive</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-50" src="images/user/03.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Anna Mull</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-50" src="images/user/04.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Paige Turner</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-50" src="images/user/01.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Bob Frapples</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-50" src="images/user/02.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Barb Ackue</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-50" src="images/user/03.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Greta Life</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-away">
                              <img class="rounded-circle avatar-50" src="images/user/04.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Ira Membrit</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-away">
                              <img class="rounded-circle avatar-50" src="images/user/01.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Pete Sariya</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center">
                           <div class="iq-profile-avatar">
                              <img class="rounded-circle avatar-50" src="images/user/02.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Monty Carlo</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                     </div>
                     <div class="right-sidebar-toggle bg-primary mt-3">
                        <i class="ri-arrow-left-line side-left-icon"></i>
                        <i class="ri-arrow-right-line side-right-icon"><span class="ml-3 d-inline-block">Close Menu</span></i> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Right Sidebar Panel End-->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-body p-0">
                           <div class="iq-edit-list">
                              <ul class="iq-edit-profile d-flex nav nav-pills">
                                 <li class="col-md-3 p-0">
                                    <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                    Personal Information
                                    </a>
                                 </li>
                                 <li class="col-md-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                    Change Password
                                    </a>
                                 </li>
                                 <li class="col-md-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#emailandsms">
                                    Email and SMS
                                    </a>
                                 </li>
                                 <li class="col-md-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#manage-contact">
                                    Manage Contact
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="iq-edit-list-data">
                        <div class="tab-content">
                           <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                              <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Personal Information</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">

                                    <form role="form" enctype="multipart/form-data" method="post">
                                       <div class="form-group row align-items-center">
                                          <div class="col-md-12">
                                             <div class="profile-img-edit">
                                                <img class="profile-pic" src="<?php echo $show['profile_photo'];?>" alt="profile-pic">
                                                <div class="p-image">
                                                   <i class="ri-pencil-line upload-button"></i>
                                                   <input class="file-upload" type="file" name="photo">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-12">
                                            <input type="submit" name="upload" value="upload" class="btn btn-primary">
                                          </div>
                                       </div>
                                    </form>
                                       <form  enctype="multipart/form-data" method="post">
                                       <div class=" row align-items-center">
                                          <div class="form-group col-sm-6">
                                             <label for="fname">Name:</label>
                                             <input type="text" class="form-control" id="fname" name="name" value="<?php echo $show['name']; ?>">
                                          </div>
                                          
                                          <div class="form-group col-sm-6">
                                             <label for="uname">User Name:</label>
                                             <input type="text" class="form-control" id="uname" value="<?php echo $show['username']; ?>" disabled>
                                          </div>
                                          <div class="form-group col-sm-6">
                                             <label for="cname">City:</label>
                                             <input type="text" class="form-control" id="cname" name="city" value="<?php echo $show['city']?>">

                                          </div>
                                          <div class="form-group col-sm-6">
                                             <label class="d-block">Gender:</label>
                                             <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                                <option selected=""><?php echo $show['gender'];?></option>
                                                
                                                <option>Male</option>
                                                <option>Female </option>
                                             </select>
                                          </div>
                                          <div class="form-group col-sm-6">
                                             <label for="dob">Date Of Birth:</label>
                                             <input type="date" class="form-control" id="dob" name="dateofbirth" value="<?php echo $show['dateofbirth'];?>">
                                          </div>
                                          <div class="form-group col-sm-6">
                                             <label>Marital Status:</label>
                                             <select class="form-control" id="exampleFormControlSelect1" name="marital_status">
                                                <option selected=""><?php echo $show['marital_status'];?></option>
                                                <option>single</option>
                                                <option>married</option>
                                                <option>Widowed</option>
                                                <option>Divorced</option>
                                                <option>Separated </option>
                                             </select>
                                          </div>
                                          
                                          <div class="form-group col-sm-6">
                                             <label>Country:</label>
                                             <select class="form-control" id="exampleFormControlSelect3" name="country">
                                                <option><?php echo $show['country'];?></option>
                                                <option>Noida</option>
                                                <option selected="">USA</option>
                                                <option>India</option>
                                                <option>Africa</option>
                                             </select>
                                          </div>
                                          <div class="form-group col-sm-6">
                                             <label>State:</label>
                                             <select class="form-control" id="exampleFormControlSelect4" name="state">
                                                <option><?php echo $show['state'];?></option>
                                                <option>Florida</option>
                                                <option selected="">Georgia</option>
                                                <option>Connecticut</option>
                                                <option>Louisiana</option>
                                             </select>
                                          </div>
                                          <div class="form-group col-sm-12">
                                             <label>Address:</label>
                                             <textarea class="form-control" name="address" rows="5" style="line-height: 22px;" name="address">
                                             <?php echo $show['address']; ?>
                                             </textarea>
                                          </div>
                                       </div>
                                       <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                                       <button type="reset" class="btn iq-bg-danger">Cancle</button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                              <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Change Password</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form>
                                       <div class="form-group">
                                          <label for="cpass">Current Password:</label>
                                          <a href="javascripe:void();" class="float-right">Forgot Password</a>
                                          <input type="Password" class="form-control" id="cpass" value="">
                                       </div>
                                       <div class="form-group">
                                          <label for="npass">New Password:</label>
                                          <input type="Password" class="form-control" id="npass" value="">
                                       </div>
                                       <div class="form-group">
                                          <label for="vpass">Verify Password:</label>
                                          <input type="Password" class="form-control" id="vpass" value="">
                                       </div>
                                       <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                       <button type="reset" class="btn iq-bg-danger">Cancle</button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                              <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Email and SMS</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form>
                                       <div class="form-group row align-items-center">
                                          <label class="col-md-3" for="emailnotification">Email Notification:</label>
                                          <div class="col-md-9 custom-control custom-switch">
                                             <input type="checkbox" class="custom-control-input" id="emailnotification" checked="">
                                             <label class="custom-control-label" for="emailnotification"></label>
                                          </div>
                                       </div>
                                       <div class="form-group row align-items-center">
                                          <label class="col-md-3" for="smsnotification">SMS Notification:</label>
                                          <div class="col-md-9 custom-control custom-switch">
                                             <input type="checkbox" class="custom-control-input" id="smsnotification" checked="">
                                             <label class="custom-control-label" for="smsnotification"></label>
                                          </div>
                                       </div>
                                       <div class="form-group row align-items-center">
                                          <label class="col-md-3" for="npass">When To Email</label>
                                          <div class="col-md-9">
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email01">
                                                <label class="custom-control-label" for="email01">You have new notifications.</label>
                                             </div>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email02">
                                                <label class="custom-control-label" for="email02">You're sent a direct message</label>
                                             </div>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email03" checked="">
                                                <label class="custom-control-label" for="email03">Someone adds you as a connection</label>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group row align-items-center">
                                          <label class="col-md-3" for="npass">When To Escalate Emails</label>
                                          <div class="col-md-9">
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email04">
                                                <label class="custom-control-label" for="email04"> Upon new order.</label>
                                             </div>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email05">
                                                <label class="custom-control-label" for="email05"> New membership approval</label>
                                             </div>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email06" checked="">
                                                <label class="custom-control-label" for="email06"> Member registration</label>
                                             </div>
                                          </div>
                                       </div>
                                       <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                       <button type="reset" class="btn iq-bg-danger">Cancle</button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                              <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Manage Contact</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form>
                                       <div class="form-group">
                                          <label for="cno">Contact Number:</label>
                                          <input type="text" class="form-control" id="cno" value="001 2536 123 458">
                                       </div>
                                       <div class="form-group">
                                          <label for="email">Email:</label>
                                          <input type="text" class="form-control" id="email" value="Bnijone@demo.com">
                                       </div>
                                       <div class="form-group">
                                          <label for="url">Url:</label>
                                          <input type="text" class="form-control" id="url" value="https://getbootstrap.com/">
                                       </div>
                                       <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                       <button type="reset" class="btn iq-bg-danger">Cancle</button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="bg-white iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                  </ul>
               </div>
             
            </div>
         </div>
      </footer>
      <!-- Footer END -->
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
      <!-- lottie JavaScript -->
      <script src="js/lottie.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
   </body>

<!-- Mirrored from iqonic.design/themes/socialv/html/profile-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 17:02:35 GMT -->
</html>