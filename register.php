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
  	<h2>Register</h2>
  </div>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
    <div class="input-group">
      <label>First name</label>
      <input type="text" name="fname" value="<?php echo $fname; ?>" placeholder="First Name">
    </div>
    <div class="input-group">
      <label>Last name</label>
      <input type="text" name="lname" value="<?php echo $lname; ?>" placeholder="Last Name">
    </div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" placeholder="UserName">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email id">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" placeholder="Password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" placeholder="Password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p class="ab"> 
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
 