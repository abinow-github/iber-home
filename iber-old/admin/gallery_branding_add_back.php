<?php
//include database configuration file
include("root/db.php");
$p_name=mysqli_real_escape_string($mysqli , $_POST['p_name']);
$url=mysqli_real_escape_string($mysqli , $_POST['weburl']);

if(!empty($_FILES["img1"]['tmp_name'])){
$temp1 = explode(".",$_FILES["img1"]["name"]);
$newfilename1 = rand(). "_".date('m-d-Y_hia') . '.' .end($temp1);
move_uploaded_file($_FILES['img1']['tmp_name'],"gallery/".$newfilename1);
$img1=$newfilename1;

}

$sql		 =   "INSERT INTO  branding(logo_name,url,logo)
					   			 VALUES	('$p_name','$url','$img1')";	
if (!mysqli_query($mysqli,$sql)) {
  die('Error: ' . mysqli_error($mysqli));
}
																 

header("location:gallery_branding.php?pro=$menu");
?>										  
					