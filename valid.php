<?php
session_start();
       $user=$_POST['username'];
       $password=$_POST['password'];

       $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'login');

        $q="select * from user where username='$user' and password='$password'";
        $result=mysqli_query($con,$q);
            
           $num=mysqli_num_rows($result);
            if($num==1)
            {
                  $_SESSION['username']=$user;
                  header('location:http://localhost/Demo/Login/home.php');
            }
            else{
                       header('location:http://localhost/Demo/Login/login.php');
            }
        mysqli_close($con);
        ?>