<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
   
	<link rel="stylesheet" type="text/css" href="login.css">
  <script type="text/javascript" src="ajax.js" >  </script>
  <link rel="stylesheet" type="text/css" href="animation.css">
  <script type="text/javascript" src="wow.min.js"></script>
        <script >
          new WOW().init();
        </script>
	
</head>
<body background="nature.jpg" style="background-size:cover;">
   
	<h1  class="jackInTheBox animated" style="color: white;text-align: center; font-size: 50px;" >REGISTRATION PAGE</h1>
  <div class="main">

  	<div class="wow fadeInDown animated" data-wow-delay="1s">
  	<form action="reg2php.php"  method="post" >
  		<fieldset>
  			<legend>Registeration Box</legend>
  		<p class="text">Login ID:
  		  		<input class="name1" required type="text" name="username" id="name1"  placeholder="Enter Login ID" autofocus autocomplete="off" onchange="fetchUser(this.value)"></p>
      <p id="user"> </p>
  		<p class="text">Password:
  		<input class="name1" required type="password" name="password1" id="password1"  placeholder="Enter your password" ></p><br/>
  		<p class="text">Confirm Password:
      <input class="name1" required type="password" name="password2" id="password2"  placeholder="Renter your password" onchange="validPassword(this.value)"></p><br/>
      <p id="pass"></p>
  	</fieldset>
<span id="mess"></span>
<br/>
  		
      <input class="button" type="submit" value="Register" >
      </form>
      <form action="login.php" method="post">
      	<input  class="button" type="submit" value="Login" >
      </form>
    </div>
  </div>
</body>
</html>