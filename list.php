<?php
session_start();
  if(!isset($_SESSION['username']))
  	header('location:http://localhost/Demo/Login/login.php');

  $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'login');

       $q="select username,profileimg from user ";
         $list=mysqli_query($con,$q);
         $num=mysqli_num_rows($list);
?>
<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script type="text/javascript" src="like.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/grayscale.min.js"></script>
	<style type="text/css">
	body{
		background-color: lightgreen;
	}
		.list{
			background-color: powderblue;
			border: 2px solid white;
			height: 60px;
			width: 120px;
		}
	</style>
</head>
<body ><br><br>
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
		<ul class="navbar-nav  ml-auto">
			<li class="nav-item">
				<a href="home.php" class="nav-link js-scroll-trigger"">Home</a>
			</li>
			<li class="nav-item">
				<a href="about.php" class="nav-link js-scroll-trigger""> About us</a>
			</li>
			<li class="nav-item">
				<a href="myuplodes.php" class="nav-link js-scroll-trigger"">My Uplodes</a>
			</li>
			<li class="nav-item">
				<a href="help.php" class="nav-link js-scroll-trigger"">Help</a>
			</li>
			<li class="nav-item">
				<a href="account.php" class="nav-link js-scroll-trigger"">My Account</a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="nav-link js-scroll-trigger"">Logout</a>
			</li>
		</ul>
	</div>
	</div>
	</nav>
	<br><br>
	<h1 class="text-center"> List</h1><br>
	<?php for($i=0;$i<$num;$i++){
         	$userlist=mysqli_fetch_array($list);
         	$name=$userlist[0];
         	?>
         	
 <a class="btn"><p  class="list " onclick="send('<?php echo $name?>')"><img src="Profile/<?php echo $userlist['profileimg']; ?>" width=50 heigth=50> <strong><?php echo $name ?></strong>
 </p></a>
         	<?php         }?>
         </div>

         <script type="text/javascript">
         	function send(name){
         		alert(name);
         	}
         </script>
</body>
</html>


         	

