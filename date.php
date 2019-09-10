<?php
date_default_timezone_set("Asia/Kolkata");
$d=date("Y-m-d h:i:sa");
$con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'db1');

$q="insert into employee (empname,DOJ,DOB) values ('rahul',CURTIME(),CURTIME())";
$status=mysqli_query($con,$q);

$q2="select * from employee ORDER BY DOJ DESC ";
mysqli_query($con,$q2);
if($status==200){
echo "Today is " .$d;
}
else{
echo 'ooops';
}
?>