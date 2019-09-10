<?php 
session_start();
$userId=$_SESSION['username'];
$previous=$_GET['previous'];
$new=$_POST['password1'];

$con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'login');

  		$q2="update user set password='$new' where username='$userId' ";
   	 $result2=mysqli_query($con,$q2);
   	 if($result2!=200)
   	 	echo "Something went wrong";

   
header('location:http://localhost/Demo/Login/home.php');
mysqli_close($con);

?>

