<?php
session_start();
$username=$_SESSION['username'];
 if(!isset($_SESSION['username']))
  	header('location:http://localhost/Demo/Login/login.php');

  $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'login');

         $q2="select * from uplodeimg where userId='$username'";
         $uplode1=mysqli_query($con,$q2);
         $uplodenum=mysqli_num_rows($uplode1);
         ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>My Uplodes</title>
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script type="text/javascript" src="deluplode.js"></script>
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/grayscale.min.js"></script>
	<style type="text/css">
	.imggg{
		width: 300px;
		 height: 270px;
	}

	</style>
 </head>
 <body>
 	
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
				<a href="about.php" class="nav-link"> About us</a>
			</li>
			<li class="nav-item">
				<a href="home.php" class="nav-link">Home</a>
			</li>
			<li class="nav-item">
				<a href="help.php" class="nav-link">Help</a>
			</li>
			<li class="nav-item">
				<a href="account.php" class="nav-link">My Account</a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="nav-link">Logout</a>
			</li>
		</ul>
	</div>
	</div>
	</nav>
<br><br><br>
<h1  style="font-size: 60px; text-align: center; color: red;text-decoration: underline;font-weight: bold;" class="wow jello animated" data-wow-delay="1s">My Uplodes</h1>
	<br><br>
	<div class="container">
 <?php 
           $count=floor($uplodenum/3+1);
	   for($j=1;$j<=$count;$j++){ ?>
	<div class="row ">
		<?php
		        if($j==$count){
		        	$temp=$uplodenum%3;
		        }
		        else{
		        	$temp=3;
		        }

		 for($i=1;$i<=$temp;$i++){
		       $uploderow=mysqli_fetch_array($uplode1) ?>
		       
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4  ">
			<img src="Img/<?php echo $uploderow['filename'] ?>" class="img-fluid img-thumbnail imggg">
			<div class="card-body">
			<h3 class="card-title"><?php echo $uploderow['imgname']?></h3>
			<p class="card-title"><?php echo $uploderow['imgcat']?></p>
			<form action="deluplode.php" method="post">
				<button class="btn btn-danger" name="imgname" value="<?php $img=$uploderow['imgname']; echo $img ;?>"> Delete </button>
			
				<button class="btn btn-primary"  >Likes:-<?php 
				 $q5="select likes from liketable where imgId='$img' ";
                 $show=mysqli_query($con,$q5);
				 $row=mysqli_fetch_array($show);
				  echo " ".$row['likes'];?></button>
            </form>
			</div>
		</div>
	<?php } ?>
	       
	</div>
	<?php }?>
	<div id="delete" class="text-center text-success" ></div>
</div>


</script>
 </body>
 </html>
