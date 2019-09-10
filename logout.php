<?php 
  session_start();
  session_destroy();
  header('location:http://localhost/Demo/Login/index.php');
  ?>