<?php
session_start();
  if(!isset($_SESSION['username']))
  	header('location:http://localhost/Demo/Login/login.php');

  $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'login');

        
         $q2="select * from uplodeimg order by time desc";
         $uplode1=mysqli_query($con,$q2);
         $uplodenum=mysqli_num_rows($uplode1);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script type="text/javascript" src="like.js"></script>
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
<link rel="stylesheet" type="text/css" href="animation.css">
  <script type="text/javascript" src="wow.min.js"></script>
        <script >
          new WOW().init();
        </script>
</head>
<body background="img1.jpg" style="background-size:cover;">

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
				<a href="list.php" class="nav-link js-scroll-trigger">Current User</a>
			</li>
			<li class="nav-item">
				<a href="about.php" class="nav-link js-scroll-trigger"> About us</a>
			</li>
			<li class="nav-item">
				<a href="myuplodes.php" class="nav-link js-scroll-trigger">My Uplodes</a>
			</li>
			<li class="nav-item">
				<a href="help.php" class="nav-link js-scroll-trigger">Help</a>
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
	<h1  style="font-size: 60px; text-align: center; color: white;text-decoration: underline;font-weight: bold;" class="wow jello animated" data-wow-delay="1s">Image Collection</h1>
	<br><br>
	
	<br><br>
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
		       
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4  " style="border-right: 2px dashed red;border-bottom: 2px dashed red;">
			<h4><?php echo $uploderow['userId'] ?></h4>
			<br>
			<img src="Img/<?php echo $uploderow['filename'] ?>" class="img-fluid img-thumbnail imggg" >
			<div class="card-body">
			<h3 class="card-title text-center"><?php echo $uploderow['imgname']?></h3>
			<p class="card-title text-center"><?php echo $uploderow['imgcat']?></p>
			<button class="btn btn-primary text-right" id="<?php  echo $uploderow['imgname']; ?>" onclick="like(this.id)">Like  
				<?php 
				$total=$uploderow['imgname'];
				 $q="select likes from liketable where imgId='$total' ";
                 $show=mysqli_query($con,$q);
				 $row=mysqli_fetch_array($show);
				  echo $row['likes']; 
				  ?></button>
			</div>
		</div>

	<?php } ?>

	</div>
	<?php }?>

</div>
<br>

</div>
<footer>Source of Images (www.briteside.me) <a href="https://brightside.me/article/100-best-photographs-without-photoshop-46555/" target="_blank" style="color: black; font-weight: bold;">Click Here</a></footer>
</body>
</html>