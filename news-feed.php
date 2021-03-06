<?php
session_start(); 
include 'engine/config.php';

if(!isset($_SESSION['user'])) {
header("location:signin.php");
}else{
    $email=$_SESSION['user'];
    $show=mysqli_fetch_array($conn->query("select * from users where email='$email'"));
}
?>



 
        <?php include 'includes/sidebar.php';?>
        <!-- TOP Nav Bar -->
        <?php include 'includes/topbar.php';?>
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
                                    <p class="mb-0">Just Now</p>
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
                                    <img class="rounded-circle avatar-50" src="images/user/11.jpg" alt="">
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
                                    <img class="rounded-circle avatar-50" src="images/user/12.jpg" alt="">
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
                    <div class="col-lg-8 row m-0 p-0">
                        <div class="col-sm-12">
                            <div id="post-modal-data" class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Create Post</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body" data-toggle="modal" data-target="#post-modal">
                                    <div class="d-flex align-items-center">
                                        <div class="user-img">
                                            <img src="<?php echo $show['profile_photo'];?>" alt="userimg" class="avatar-60 rounded-circle">
                                        </div>
                                        <form class="post-text ml-3 w-100" action="javascript:void();">
                                            <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                                        </form>
                                    </div>
                                    <hr>
                                    <ul class="post-opt-block d-flex align-items-center list-inline m-0 p-0">
                                        <li class="iq-bg-primary rounded p-2 pointer mr-3">
                                            <a href="#"></a><img src="images/small/07.png" alt="icon" class="img-fluid"> Photo/Video</li>
                                        <li class="iq-bg-primary rounded p-2 pointer mr-3">
                                            <a href="#"></a><img src="images/small/08.png" alt="icon" class="img-fluid"> Tag Friend</li>
                                        <li class="iq-bg-primary rounded p-2 pointer mr-3">
                                            <a href="#"></a><img src="images/small/09.png" alt="icon" class="img-fluid"> Feeling/Activity</li>
                                        <li class="iq-bg-primary rounded p-2 pointer">
                                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle" id="post-option" data-toggle="dropdown">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="post-option" style="">
                                                        <a class="dropdown-item" href="#">Check in</a>
                                                        <a class="dropdown-item" href="#">Live Video</a>
                                                        <a class="dropdown-item" href="#">Gif</a>
                                                        <a class="dropdown-item" href="#">Watch Party</a>
                                                        <a class="dropdown-item" href="#">Play with Friend</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <?php
                                    
                                    if (isset($_POST['submit'])) {
                                        $post_id = rand(00000,11111);
                                        $caption = $_POST['caption'];
                                        $imageCount = count($_FILES['file']['name']);
                                        for ($i=0; $i < $imageCount; $i++) { 
                                            $imageName = $_FILES['file']['name'][$i];
                                            $imageTempName = $_FILES['file']['tmp_name'][$i];
                                            $targetPath = "./uploads/".$imageName;
                                            if (move_uploaded_file($imageTempName, $targetPath)) {
                                               $sql2 = $conn->query("INSERT INTO posts(caption,post_id,email)VALUES('$caption','$post_id','$email')");
                                               $sql = $conn->query("INSERT INTO media(image,post_id)VALUES('$imageName','$post_id')");

                                            }

                                        }
                                     
                                    }
                                ?>


                                <div class="modal fade" id="post-modal" tabindex="-1" role="dialog" aria-labelledby="post-modalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-fill"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-img">
                                                        <img src="<?php echo $show['profile_photo'];?>" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                                                    </div>
                                                    <form action="" method="post" class="post-text ml-3 w-100" enctype="multipart/form-data">
                                                        <textarea class="form-control rounded" maxlength="2000" placeholder="Write something here..." style="border:none;" name="caption"></textarea>
                                                        <script type="text/javascript">
                                                        CKEDITOR.replace( 'caption' );
                                                    </script>
                                                        <input type="file" name="file[]" multiple >
                                                        <button type="submit" class="btn btn-primary d-block w-100 mt-3" name="submit" value="upload">Post</button>
                                                    </form>
                                                </div>
                                                <hr>
                                                
                                                
                                               
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--start loop-->
                        <?php
                        $sql = "SELECT * from posts order by id desc";
                        $query = $dbh->prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0){
                        foreach($results as $result)
                    {
                        //$conn= mysqli_connect("localhost", "root","","buzzeet");

                        $email= htmlentities($result->email);
                        $show=mysqli_fetch_array($conn->query("select * from users where email='$email'"));
                        $post_date = $result->post_date;
                        ?>
                        <div class="col-sm-12">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-body">
                                    <div class="user-post-data">
                                        <div class="d-flex flex-wrap">
                                            <div class="media-support-user-img mr-3">
                                                <img class="rounded-circle img-fluid" src="<?php echo $show['profile_photo'];?>" alt="">
                                            </div>
                                            <div class="media-support-info mt-2">
                                                <h5 class="mb-0 d-inline-block"><a href="#" class=""><?php echo $show['name']?></a></h5>
                                                <p class="mb-0 text-primary"><?php echo $post_date?></p>
                                            </div>
                                            <div class="iq-card-post-toolbar">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                                    <div class="dropdown-menu m-0 p-0">
                                                        <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                                <div class="icon font-size-20"><i class="ri-save-line"></i></div>
                                                                <div class="data ml-2">
                                                                    <h6>Save Post</h6>
                                                                    <p class="mb-0">Add this to your saved items</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                                <div class="icon font-size-20"><i class="ri-close-circle-line"></i></div>
                                                                <div class="data ml-2">
                                                                    <h6>Hide Post</h6>
                                                                    <p class="mb-0">See fewer posts like this.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                                <div class="icon font-size-20"><i class="ri-user-unfollow-line"></i></div>
                                                                <div class="data ml-2">
                                                                    <h6>Unfollow User</h6>
                                                                    <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                                <div class="icon font-size-20"><i class="ri-notification-line"></i></div>
                                                                <div class="data ml-2">
                                                                    <h6>Notifications</h6>
                                                                    <p class="mb-0">Turn on notifications for this post</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <style>.popup{
   
}
.popup img{
   
    cursor: pointer
}
.show{
    z-index: 999;
    display: none;
}
.show .overlay{
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,.66);
    position: absolute;
    top: 0;
    left: 0;
}
.show .img-show{
    width: 600px;
    height: 400px;
    background: #FFF;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    overflow: hidden
}
.img-show span{
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 99;
    cursor: pointer;
}
.img-show img{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
}
/*End style*/

}</style>
                                    <div class="mt-3">
                                        <p><?php echo $result->caption?></p>
                                    </div>
                                    <div class="user-post">
                                        <div class="d-flex">
                                            <?php
                                            $post_id = $result->post_id;
                                            
                                            $images = mysqli_num_rows($conn->query("select * from media where post_id='$post_id'"));
                                            if($images==1){
                                                for ($i=0; $i < $images ; $i++) { 
                                                   $picture = mysqli_fetch_array($conn->query("select * from media where post_id = '$post_id'"));
                                            ?>

                                            <div class="user-post text-center">
                                        <a href="javascript:void();"><img src="uploads/<?php echo $picture['image']?>" alt="post-image" class="img-fluid rounded w-100 mt-3"></a>
                                    </div><?php }}else if($images==2){
                                                    
                                        ?>

                                            <div class="row">
                                                <?php
                                                   $sql = "SELECT * from media where post_id ='$post_id'";
                                                   $query = $dbh->prepare($sql);
                                                   $query->execute();
                                                   $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                   $cnt=1;
                                                   if($query->rowCount() > 0){
                                                   foreach($results as $result)
                                               {?>
                                                <div class="col-md-6">
                                                    <a href="javascript:void();"><img style="object-fit: cover;width: 260px;height: 120px;" src="uploads/<?php echo $result->image ?>" alt="post-image" class="img-fluid rounded w-100"></a>
                                                </div>
                                               <?php }} ?>
                                            </div>

                                    <?php }else if($images == 3){?>
                                        
                                        <div class="row">
                                                <?php
                                                   $sql = "SELECT * from media where post_id ='$post_id'";
                                                   $query = $dbh->prepare($sql);
                                                   $query->execute();
                                                   $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                   $cnt=1;
                                                   if($query->rowCount() > 0){
                                                   foreach($results as $result)
                                               {?>
                                                <div class="col-sm-12 mt-3 popup">
                                                    <img style="object-fit: cover;width: 260px;height: 160px;" src="uploads/<?php echo $result->image ?>" alt="post-image" class="img-fluid rounded w-100">
                                                </div>
                                               <?php }} ?>
                                            </div>
                                        <?php }else if($images == 4){?>
                                            <div class="row">
                                                <?php
                                                   $sql = "SELECT * from media where post_id ='$post_id'";
                                                   $query = $dbh->prepare($sql);
                                                   $query->execute();
                                                   $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                   $cnt=1;
                                                   if($query->rowCount() > 0){
                                                   foreach($results as $result)
                                               {?>
                                                <div class="col-md-6 mt-3 popup">
                                                    <img style="object-fit: cover;width: 260px;height: 160px;" src="uploads/<?php echo $result->image ?>" alt="post-image" class="img-fluid rounded w-100">
                                                </div>
                                               <?php }} ?>
                                            </div>
                                        
                                        <?php }else{?>

                                        <?php }?>
                                        </div>
                                    </div>
                                    
                                    <div class="comment-area mt-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="like-block position-relative d-flex align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <div class="like-data">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                <img src="images/icon/01.png" class="img-fluid" alt="">
                                                </span>
                                                            <div class="dropdown-menu">
                                                                <a class="ml-2 mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like"><img src="images/icon/01.png" class="img-fluid" alt=""></a>
                                                                <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Love"><img src="images/icon/02.png" class="img-fluid" alt=""></a>
                                                                <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Happy"><img src="images/icon/03.png" class="img-fluid" alt=""></a>
                                                                <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="HaHa"><img src="images/icon/04.png" class="img-fluid" alt=""></a>
                                                                <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Think"><img src="images/icon/05.png" class="img-fluid" alt=""></a>
                                                                <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sade"><img src="images/icon/06.png" class="img-fluid" alt=""></a>
                                                                <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lovely"><img src="images/icon/07.png" class="img-fluid" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="total-like-block ml-2 mr-3">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                140 Likes
                                                </span>
                                        
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Max Emum</a>
                                                                <a class="dropdown-item" href="#">Bill Yerds</a>
                                                                <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                                <a class="dropdown-item" href="#">Tara Misu</a>
                                                                <a class="dropdown-item" href="#">Midge Itz</a>
                                                                <a class="dropdown-item" href="#">Sal Vidge</a>
                                                                <a class="dropdown-item" href="#">Other</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="total-comment-block">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                             20 Comment
                                             </span>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Max Emum</a>
                                                            <a class="dropdown-item" href="#">Bill Yerds</a>
                                                            <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                            <a class="dropdown-item" href="#">Tara Misu</a>
                                                            <a class="dropdown-item" href="#">Midge Itz</a>
                                                            <a class="dropdown-item" href="#">Sal Vidge</a>
                                                            <a class="dropdown-item" href="#">Other</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="share-block d-flex align-items-center feather-icon mr-3">
                                                <a href="javascript:void();"><i class="ri-share-line"></i>
                                       <span class="ml-1">99 Share</span></a>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul class="post-comments p-0 m-0">
                                            <li class="mb-2">
                                        
                                                <div class="d-flex flex-wrap">
                                                    <div class="user-img">
                                                        <img src="images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                                    </div>
                                                    <div class="comment-data-block ml-3">
                                                        <h6>Monty Carlo</h6>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                        <div class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="javascript:void();">like</a>
                                                            <a href="javascript:void();">reply</a>
                                                            <a href="javascript:void();">translate</a>
                                                            <span> 5 min </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex flex-wrap">
                                                    <div class="user-img">
                                                        <img src="images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                                    </div>
                                                    <div class="comment-data-block ml-3">
                                                        <h6>Paul Molive</h6>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                        <div class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="javascript:void();">like</a>
                                                            <a href="javascript:void();">reply</a>
                                                            <a href="javascript:void();">translate</a>
                                                            <span> 5 min </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                            <input type="text" class="form-control rounded">
                                            <div class="comment-attagement d-flex">
                                                <a href="javascript:void();"><i class="ri-link mr-3"></i></a>
                                                <a href="javascript:void();"><i class="ri-user-smile-line mr-3"></i></a>
                                                <a href="javascript:void();"><i class="ri-camera-line mr-3"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Loop-->
<?php }}?>



                        
                        <div class="col-sm-12">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-body">
                                    <div class="post-item">
                                        <div class="d-flex flex-wrap">
                                            <div class="media-support-user-img mr-3">
                                                <img class="rounded-circle img-fluid" src="images/user/1.jpg" alt="">
                                            </div>
                                            <div class="media-support-info mt-2">
                                                <h5 class="mb-0 d-inline-block"><a href="#" class="">Bni Cyst</a></h5>
                                                <p class="ml-1 mb-0 d-inline-block">Changed Profile Picture</p>
                                                <p class="mb-0">3 day ago</p>
                                            </div>
                                            <div class="iq-card-post-toolbar">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                                    <div class="dropdown-menu m-0 p-0">
                                                        <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                                <div class="icon font-size-20"><i class="ri-save-line"></i></div>
                                                                <div class="data ml-2">
                                                                    <h6>Save Post</h6>
                                                                    <p class="mb-0">Add this to your saved items</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                                <div class="icon font-size-20"><i class="ri-close-circle-line"></i></div>
                                                                <div class="data ml-2">
                                                                    <h6>Hide Post</h6>
                                                                    <p class="mb-0">See fewer posts like this.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                                <div class="icon font-size-20"><i class="ri-user-unfollow-line"></i></div>
                                                                <div class="data ml-2">
                                                                    <h6>Unfollow User</h6>
                                                                    <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                                <div class="icon font-size-20"><i class="ri-notification-line"></i></div>
                                                                <div class="data ml-2">
                                                                    <h6>Notifications</h6>
                                                                    <p class="mb-0">Turn on notifications for this post</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-post text-center">
                                        <a href="javascript:void();"><img src="images/page-img/p5.jpg" alt="post-image" class="img-fluid rounded w-100 mt-3"></a>
                                    </div>
                                    <div class="comment-area mt-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="like-block position-relative d-flex align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <div class="like-data">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                <img src="images/icon/01.png" class="img-fluid" alt="">
                                                </span>
                                                            <div class="dropdown-menu">
                                                                <a class="ml-2 mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like"><img src="images/icon/01.png" class="img-fluid" alt=""></a>
                                                                <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Love"><img src="images/icon/02.png" class="img-fluid" alt=""></a>
                                                                <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Happy"><img src="images/icon/03.png" class="img-fluid" alt=""></a>
                                                                <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="HaHa"><img src="images/icon/04.png" class="img-fluid" alt=""></a>
                                                                <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Think"><img src="images/icon/05.png" class="img-fluid" alt=""></a>
                                                                <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sade"><img src="images/icon/06.png" class="img-fluid" alt=""></a>
                                                                <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lovely"><img src="images/icon/07.png" class="img-fluid" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="total-like-block ml-2 mr-3">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                140 Likes
                                                </span>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Max Emum</a>
                                                                <a class="dropdown-item" href="#">Bill Yerds</a>
                                                                <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                                <a class="dropdown-item" href="#">Tara Misu</a>
                                                                <a class="dropdown-item" href="#">Midge Itz</a>
                                                                <a class="dropdown-item" href="#">Sal Vidge</a>
                                                                <a class="dropdown-item" href="#">Other</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="total-comment-block">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                             20 Comment
                                             </span>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Max Emum</a>
                                                            <a class="dropdown-item" href="#">Bill Yerds</a>
                                                            <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                            <a class="dropdown-item" href="#">Tara Misu</a>
                                                            <a class="dropdown-item" href="#">Midge Itz</a>
                                                            <a class="dropdown-item" href="#">Sal Vidge</a>
                                                            <a class="dropdown-item" href="#">Other</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="share-block d-flex align-items-center feather-icon mr-3">
                                                <a href="javascript:void();"><i class="ri-share-line"></i>
                                       <span class="ml-1">99 Share</span></a>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul class="post-comments p-0 m-0">
                                            <li class="mb-2">
                                                <div class="d-flex flex-wrap">
                                                    <div class="user-img">
                                                        <img src="images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                                    </div>
                                                    <div class="comment-data-block ml-3">
                                                        <h6>Monty Carlo</h6>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                        <div class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="javascript:void();">like</a>
                                                            <a href="javascript:void();">reply</a>
                                                            <a href="javascript:void();">translate</a>
                                                            <span> 5 min </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex flex-wrap">
                                                    <div class="user-img">
                                                        <img src="images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                                    </div>
                                                    <div class="comment-data-block ml-3">
                                                        <h6>Paul Molive</h6>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                        <div class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="javascript:void();">like</a>
                                                            <a href="javascript:void();">reply</a>
                                                            <a href="javascript:void();">translate</a>
                                                            <span> 5 min </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                            <input type="text" class="form-control rounded">
                                            <div class="comment-attagement d-flex">
                                                <a href="javascript:void();"><i class="ri-link mr-3"></i></a>
                                                <a href="javascript:void();"><i class="ri-user-smile-line mr-3"></i></a>
                                                <a href="javascript:void();"><i class="ri-camera-line mr-3"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-4">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Stories</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <ul class="media-story m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center">
                                        <i class="ri-add-line font-size-18"></i>
                                        <div class="stories-data ml-3">
                                            <h5>Creat Your Story</h5>
                                            <p class="mb-0">time to story</p>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center active">
                                        <img src="images/page-img/s2.jpg" alt="story-img" class="rounded-circle img-fluid">
                                        <div class="stories-data ml-3">
                                            <h5>Anna Mull</h5>
                                            <p class="mb-0">1 hour ago</p>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center">
                                        <img src="images/page-img/s3.jpg" alt="story-img" class="rounded-circle img-fluid">
                                        <div class="stories-data ml-3">
                                            <h5>Ira Membrit</h5>
                                            <p class="mb-0">4 hour ago</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/page-img/s1.jpg" alt="story-img" class="rounded-circle img-fluid">
                                        <div class="stories-data ml-3">
                                            <h5>Bob Frapples</h5>
                                            <p class="mb-0">9 hour ago</p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-primary d-block mt-3">See All</a>
                            </div>
                        </div>
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Events</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" role="button">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" style="">
                                            <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                            <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                            <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <ul class="media-story m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center ">
                                        <img src="images/page-img/s4.jpg" alt="story-img" class="rounded-circle img-fluid">
                                        <div class="stories-data ml-3">
                                            <h5>Web Workshop</h5>
                                            <p class="mb-0">1 hour ago</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/page-img/s5.jpg" alt="story-img" class="rounded-circle img-fluid">
                                        <div class="stories-data ml-3">
                                            <h5>Fun Events and Festivals</h5>
                                            <p class="mb-0">1 hour ago</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Upcoming Birthday</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <ul class="media-story m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center">
                                        <img src="images/user/01.jpg" alt="story-img" class="rounded-circle img-fluid">
                                        <div class="stories-data ml-3">
                                            <h5>Anna Sthesia</h5>
                                            <p class="mb-0">Today</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/user/02.jpg" alt="story-img" class="rounded-circle img-fluid">
                                        <div class="stories-data ml-3">
                                            <h5>Paul Molive</h5>
                                            <p class="mb-0">Tomorrow</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Suggested Pages</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton01" data-toggle="dropdown" aria-expanded="false" role="button">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01" style="">
                                            <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                            <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                            <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <ul class="suggested-page-story m-0 p-0 list-inline">
                                    <li class="mb-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="images/page-img/42.png" alt="story-img" class="rounded-circle img-fluid avatar-50">
                                            <div class="stories-data ml-3">
                                                <h5>Iqonic Studio</h5>
                                                <p class="mb-0">Lorem Ipsum</p>
                                            </div>
                                        </div>
                                        <img src="images/small/img-1.jpg" class="img-fluid rounded" alt="Responsive image">
                                        <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line mr-2"></i> Like Page</a></div>
                                    </li>
                                    <li class="">
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="images/page-img/42.png" alt="story-img" class="rounded-circle img-fluid avatar-50">
                                            <div class="stories-data ml-3">
                                                <h5>Cakes & Bakes </h5>
                                                <p class="mb-0">Lorem Ipsum</p>
                                            </div>
                                        </div>
                                        <img src="images/small/img-2.jpg" class="img-fluid rounded" alt="Responsive image">
                                        <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line mr-2"></i> Like Page</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 text-center">
                        <img src="images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
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
                <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="#">Buzzeet</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <div class="show">
  <div class="overlay"></div>
  <div class="img-show">
    <span>X</span>
    <img src="">
  </div>
</div>
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
    <!-- am core JavaScript -->
    <script src="js/core.js"></script>
    <!-- am charts JavaScript -->
    <script src="js/charts.js"></script>
    <!-- am animated JavaScript -->
    <script src="js/animated.js"></script>
    <!-- am kelly JavaScript -->
    <script src="js/kelly.js"></script>
    <!-- am maps JavaScript -->
    <script src="js/maps.js"></script>
    <!-- am worldLow JavaScript -->
    <script src="js/worldLow.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>
<script>$(function () {
    "use strict";
    
    $(".popup img").click(function () {
        var $src = $(this).attr("src");
        $(".show").fadeIn();
        $(".img-show img").attr("src", $src);
    });
    
    $("span, .overlay").click(function () {
        $(".show").fadeOut();
    });
    
});
    </script>
<!-- Mirrored from iqonic.design/themes/socialv/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 16:58:46 GMT -->

</html>