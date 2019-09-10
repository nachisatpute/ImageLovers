<?php
session_start();
$imgname=$_POST['imgname'];
$imgcat=$_POST['imgcat'];
$upfile=$_FILES['upfile'];
$username=$_SESSION['username'];
$filename=$upfile['name'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'login');

if(file_exists("Img/".$upfile['name']))
{
	echo "File already exists";
}
else if($upfile['type']=="image/jpeg"){

	$q="insert into uplodeimg (userId,filename,imgname,imgcat) values ('$username','$filename','$imgname','$imgcat') ";
     mysqli_query($con,$q);

     $q2="insert into liketable (imgId,likes) values ('$imgname',0) ";
     mysqli_query($con,$q2);

    /* $q3="alter table userlikes add column $imgname int default 0";
     mysqli_query($con,$q3);*/
     $q3="insert into userlike (imgname) values ('$imgname') ";
      mysqli_query($con,$q3);

move_uploaded_file($upfile['tmp_name'],"Img/".$upfile['name']);
}
else{
	echo "File format is not valid";
}
header('location:http://localhost/Demo/Login/home.php');
mysqli_close($con);
?>

