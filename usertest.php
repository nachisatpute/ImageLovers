<?php
      $username=$_GET['user'];

      $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'login');

        $q="select * from user where username='$username' ";
        $result=mysqli_query($con,$q);
            
           $num=mysqli_num_rows($result);
         if($num==1)
            { echo "UserId already registered.";

            }
?>
