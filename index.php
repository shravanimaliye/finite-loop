<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p class="az">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<button class="btn"><p> <a href="index.php?logout='1'">logout</a> </p></button>
      <button class="btn"><p> <a href="divison.html" >start</a> </p></button>
    <?php endif ?>
</div>
		
</body>
</html>