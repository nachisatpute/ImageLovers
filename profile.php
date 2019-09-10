<?php
session_start();
$username=$_SESSION['username'];
$profile=$_FILES['profile'];

$imgname=$profile['name'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'login');

$q="update user set profileimg='$imgname' where username='$username'";
        $result=mysqli_query($con,$q);
//echo $imgname;
     move_uploaded_file($profile['tmp_name'],"Profile/".$imgname);
        header('location:http://localhost/Demo/Login/account.php');

mysqli_close($con);
?>
