<?php 
session_start();
if(!isset($_SESSION['username']))
  	header('location:http://localhost/Demo/Login/login.php');
  	
$con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'login');
 $user=$_SESSION['username'];

        $q="select * from user where username='$user'";
        $result=mysqli_query($con,$q);

        $getresult=mysqli_fetch_array($result);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script type="text/javascript" src="change.js"></script>
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/grayscale.min.js"></script>
	<style type="text/css">
		#uplode{
            visibility: hidden;
			position: absolute;
		}
		#changepass{
            visibility: hidden;
			position: absolute;
		}
		#delete{
            visibility: hidden;
			position: absolute;
		}
		.name1{
			width:500px;
			font-size: 15px;
			height: 25px;
		}
		lable{
			font-size: 18px;
		}
	</style>
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
		<ul class="navbar-nav  ml-auto">
			<li class="nav-item">
				<a href="about.php" class="nav-link"> About us</a>
			</li>
			
			<li class="nav-item">
				<a href="help.php" class="nav-link">Help</a>
			</li>
			<li class="nav-item">
				<a href="home.php" class="nav-link"><span class="glyphicon glyphicon-home"></span>Home</a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="nav-link">Logout</a>
			</li>
		</ul>
	</div>
	</div>
	</nav>
<br><br><br>
<div class="container text-center bg-info" style="width: 400px;height: 400px;" >
	<img src="Profile/<?php echo $getresult[2]; ?>" class="img-fluid rounded-circle img-thumbnail" style="width: 50%;height: 50%; margin-top: 5px;padding-top: 5px;">
	<br><br>
	<button class="btn btn-danger" id="profilebtn" style="float: left;" onclick="imgprofile(this.id)" >Change Image</button>
	<form action="delprofileimg.php" method="post">
	<input class="btn btn-danger" type="submit" value="Remove Image" style="float: right;" >
</form>
<br>
	<span id="profileimg" style="visibility: hidden; padding-top: 10px;">
		<form action="profile.php"  method="post" enctype="multipart/form-data">
   		<br>
        <lable class="text">Choose File:
  			<input class="name1 " required type="file" name="profile" id="profimg"  placeholder="Choose File" ></lable>
  			<input class="btn btn-primary" type="submit" value="Change" >
			
		</form>
	</span>
</div>
<br><br>
<div class="container text-center">
	<button  id="uplodebtn" class="btn btn-primary bg-success " onclick="display(this.id)">Uplode Image</button>
	<button id="changepassbtn" class="btn btn-primary bg-success" onclick="display(this.id)">Change Password</button>
	<button  id="deletebtn" class="btn btn-primary bg-success" onclick="display(this.id)">Delete Account</button>
</div>

<div>

	<div id="uplode" class="container form-group">
		<h1 style="color: white;text-align: center;font-size: 50px;">Uplode PAGE</h1>
  <div >
<form action="uplode2php.php" name="form" method="post" enctype="multipart/form-data">
  		<strong>UPLODE</strong>
  		<br><br>
        <lable class="text">Choose File:
  			<input class="name1 " required type="file" name="upfile" id="name1"  placeholder="Choose File"></lable>
  	    <br><br>
  		<lable class="text">Image Name:
  		<input class="name1 " required type="text" name="imgname" id="password"  placeholder="Enter Image Name"></lable><br><br>
  	
  		<lable class="text">Image Categeory:
  		<input class="name1" required type="text" name="imgcat" id="password"  placeholder="Enter Image Categeory"></lable><br><br>
  	
  		<input class="btn" type="submit" value="Uplode" >
  	<br/>
   </form>
      </div>
</div>


<div id="changepass" class="container form-group">
	<p>PASSWORD CHANGE</p>
	<form action="changepass.php" method="post">
		
		<label>Previous Password:</label>
		<input type="password" name="previous" class="name1" required placeholder="Enter your previous password" onchange="fetchPassword(this.value)"><br>
		<p id="warning"></p><br>
            
		<lable>New Password:</lable>
  		<input class="name1" required type="password" name="password1" id="password1"  placeholder="Enter your new password" ><br><br>
  	
  	
  		<lable >Confirm Password:</lable>
      <input class="name1" required type="password" name="password2" id="password2"  placeholder="Renter your password" onchange="validPassword(this.value)"><br><br>

       <input class="btn btn-primary" type="submit" value="Confirm"  >
	</form>
</div>

<div id="delete" class="container form-group ">
	<p>DELETE ACCOUNT</p>
	<form action="delete.php" method="post">
		<label>User Id:</label>
		<input type="password" name="user" class="name1" required placeholder="Enter your userId" ><br><br>
		<label>Password:</label>
      <input class="name1" required type="password" name="password" id="password"  placeholder="Enter your password" ><br>
       <input class="btn btn-primary" type="submit" value="Delete" >
	</form>
</div>
<script type="text/javascript">
	function display(str){
		if(str=="uplodebtn"){
		 document.getElementById("uplode").style.visibility="visible";
	     document.getElementById("changepass").style.visibility="hidden";
	     document.getElementById("delete").style.visibility="hidden";
	        }
	    else if(str=="changepassbtn"){
         document.getElementById("uplode").style.visibility="hidden";
	     document.getElementById("changepass").style.visibility="visible";
	     document.getElementById("delete").style.visibility="hidden";
	    }
	    else{
	    	 document.getElementById("uplode").style.visibility="hidden";
	     document.getElementById("changepass").style.visibility="hidden";
	     document.getElementById("delete").style.visibility="visible";
	    }
	}


  function imgprofile(str1){
  	if(str1=="profilebtn"){
  		if(document.getElementById("profileimg").style.visibility=="hidden")
  		document.getElementById("profileimg").style.visibility="visible";
  	    else
  	    	document.getElementById("profileimg").style.visibility="hidden";
  	}

  }

</script>

</body>
</html>