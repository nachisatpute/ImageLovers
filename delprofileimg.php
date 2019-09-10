<?php
session_start();
$user=$_SESSION['username'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'login');

$q3="update user set profileimg='login.jpg' where username='$user'";
        $result=mysqli_query($con,$q3);

           header('location:http://localhost/Demo/Login/account.php');
?>