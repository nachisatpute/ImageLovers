<?php 
session_start();
$con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'login');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/grayscale.min.js"></script>
</head>
<body>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top size wow rubberBand animated" id="mainNav">
		<div class="container">
			<br>
		<h2 class="navbar-brand">Welcome, <?php echo $_SESSION['username']; ?></h2></a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a href="about.php" class="nav-link"> About us</a>
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
</div>
</body>
</html>