<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" type="text/css" href="animation.css">
  <script type="text/javascript" src="wow.min.js"></script>
        <script >
          new WOW().init();
        </script>
  
	
</head>
<body background="JAA5qgn.jpg" style="background-size: cover;">
	<h1 class="jackInTheBox animated" style="color: white;text-align: center;font-size: 50px;">LOGIN PAGE</h1>
  <div class="main ">

  		<div class="wow fadeInDown animated" data-wow-delay="1s">
  	<form action="valid.php" name="form" method="post" >
  		<fieldset>
  			<legend>LOG IN</legend>
        <img src="login-user.jpg" alt="User Login" style="width: 60px; height: 60px; margin-top: 5px;border-radius: 100%; border:4px solid lime ;">
  		<p class="text">Login ID:
  			
  		<input class="name1" required type="text" name="username" id="name1"  placeholder="Enter Login ID" autofocus autocomplete="off"></p>
  		<p class="text">Password:
  		<input class="name1" required type="password" name="password" id="password"  placeholder="Enter your password"></p><br/>
  		
  	</fieldset>
<span id="mess"></span>
<br/>
  		<input  class="button " type="submit" value="Login" >
      </form>
      <form action="register.php" method="post">
      	<input class="button" type="submit" value="Register" >
      </form>
    </div>
  </div>
</body>
</html>