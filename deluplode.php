<?php
session_start();
$username=$_SESSION['username'];
$imgname=$_POST['imgname'];
 if(!isset($_SESSION['username']))
  	header('location:http://localhost/Demo/Login/login.php');

  $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'login');

       $q1="delete from uplodeimg where imgname='$imgname'";
       $result1=mysqli_query($con,$q1);

       $q2="delete from liketable where imgId='$imgname'";
       $result2=mysqli_query($con,$q2);

       $q3="delete from userlike where imgname='$imgname'";
      $result3=mysqli_query($con,$q3);

if($result3==200 && $result2==200 && $result1==200){
 
            header('location:http://localhost/Demo/Login/myuplodes.php');
       

      }

?>