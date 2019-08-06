<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/tma1/cafetra.css">
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
  <div class="my">

    <h1 class="header"><a href="cafetra.php">Cafetra</a>
      <button type="button" name="button" class="buy">Order</button>
      <img src="Image/header.jpg" height="50px" width="5%">
    </h1>

  </div>
    <div class="topnav">
      <a   href="../cafetra.php">Home</a>
      <a href="../Piza.html">Piza</a>
      <a href="../rice.html">Rice</a>
      <a href="../drink.html">Drinks</a>
      <a href="../contact.html">Contact</a>
      <a href="../about.html">About</a>
      <a class="active" href="http://localhost/tma1/registration/login.php" style="float:right;">Log In</a>
    </div>
  <div class="header">
  	<h2>Login</h2>
  </div>

  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
