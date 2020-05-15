<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="s1.css"> 
  <style type="text/css">
    body{
      background-image: url("log3.jpg");
      background-repeat: no-repeat;
      background-position: scroll;
      background-size: cover;
      min-height: 100%;
      opacity: 0.7;
    }
</style>
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="Username">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p class="ab">
  		Not yet a member? <a href="register.php" >Sign up</a>
  	</p>
  </form>
</body>
</html>