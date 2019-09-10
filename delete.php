<?php 
session_start();
$user=$_POST['user'];
$password=$_POST['password'];

       $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'login');

  		 $q="select * from user where username='$user' and password='$password'";
        $result=mysqli_query($con,$q);
   	    $num=mysqli_num_rows($result);
   	  
   	if($num==1){
   		
         $q2="delete from user where username='$user'";
         mysqli_query($con,$q2);

          $q3="delete from userlikes where userId='$user'";
         mysqli_query($con,$q3);


   	}

   
header('location:http://localhost/Demo/Login/login.php');
mysqli_close($con);

?>

