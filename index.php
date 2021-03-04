<?php if(isset($_POST['user'])){
	header("location: news-feed.php");
}else{
	header("location: signin.php");
}
?>