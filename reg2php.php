<?php 
$username=$_POST['username'];
$password1=$_POST['password1'];

$con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'login');

       $q="insert into user (username,password) values ('$username','$password1')";
      $status=mysqli_query($con,$q);

      /*$q2="insert into userlikes (userId) values ('$username')";
      mysqli_query($con,$q2);*/
      $q2="alter table userlike add column $username int(1) default 0";
      mysqli_query($con,$q2);

      if($status==200){
      	header('location:http://localhost/Demo/Login/login.php');
      }
      else
      {
      	echo "Registration Failed";

      }

      ?>