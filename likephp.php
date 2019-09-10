<?php
session_start();
  $username=$_SESSION['username'];
  $str=$_GET['likes'];
 
      $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'login');

       $q3="select $username,'imgname' from userlike where imgname='$str' ";
       $q3result=mysqli_query($con,$q3);
       $getresult=mysqli_fetch_array($q3result);

       if($getresult[$username]==0){
             
        $q="select * from liketable where imgId='$str' ";
        $show=mysqli_query($con,$q);
         $num=mysqli_num_rows($show);
        if($num==1){
        $row=mysqli_fetch_array($show);

        $l=$row['likes'];
        $l=$l+1;
        
        $q4="update userlike set $username=1 where imgname='$str' ";
            mysqli_query($con,$q4);

        $q2="update liketable set likes=$l where imgId='$str'";
        mysqli_query($con,$q2);

        echo "Like ".$l;


    }

        else{
        	echo "Sorry, Some thing Went Wrong";
        }
      }

    else{
      echo "Liked";
    }


    mysqli_close($con);

?>