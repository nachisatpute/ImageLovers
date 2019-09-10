<?php
      session_start();
$userId=$_SESSION['username'];
     $previous=$_GET['previous'];

           $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'login');

        $q="select password from user where username='$userId'";
   $result=mysqli_query($con,$q);

  $password=mysqli_fetch_array($result);

   if($previous!=$password['password']){
   	echo "Invalid Password";
   }
  
?>
