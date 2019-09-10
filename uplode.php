<?php
session_start();
  if(!isset($_SESSION['username']))
  	header('location:http://localhost/Demo/Login/login.php');

  $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'login');

        $q="select * from liketable ";
        $show=mysqli_query($con,$q);
         $num=mysqli_num_rows($show);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Uplode</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="container">
			<br>
		<h2 class="navbar-brand">Welcome, <?php echo $_SESSION['username']; ?></h2></a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="navidd">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navidd">
		<ul class="navbar-nav text-center ml-auto">
			<li class="nav-item">
				<a href="about.php" class="nav-link"> About us</a>
			</li>
			
			<li class="nav-item">
				<a href="help.php" class="nav-link">Help</a>
			</li>
			<li class="nav-item">
				<a href="account.php" class="nav-link">My Account</a>
			</li>
			<li class="nav-item">
				<a href="home.php" class="nav-link">Home</a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="nav-link">Logout</a>
			</li>
		</ul>
	</div>
	</div>
	</nav>
<h1 style="color: white;text-align: center;font-size: 50px;">Uplode PAGE</h1>
  <div class="main">

  		
  	<form action="uplode2php.php" name="form" method="post" enctype="multipart/form-data">
  		<fieldset>
  			<legend><strong>UPLODE</strong></legend>
        
  		<p class="text">Choose File:
  			
  		<input class="name1" required type="file" name="upfile" id="name1"  placeholder="Choose File"></p>
  		<br>
  		<p class="text">Image Name:
  		<input class="name1" required type="text" name="imgname" id="password"  placeholder="Enter Image Name"></p><br/>
  		<p class="text">Image Categeory:
  		<input class="name1" required type="text" name="imgcat" id="password"  placeholder="Enter Image Categeory"></p><br/>
  		<input class="btn" type="submit" value="Uplode" >
  	</fieldset>
<span id="mess"></span>
<br/>
  
      </form>
     
  </div>
</div>
</body>
</html>