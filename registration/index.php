
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
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart</title>
    <link rel="stylesheet" href="../cafetra.css">
  </head>
  <body>


    <div class="my">

      <h1 class="header"><a href="../cafetra.php">Cafetra</a>
        <button type="button" name="button" class="buy">  <div class="content">
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
              	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
              	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
              <?php endif ?>
          </div></button>

      </h1>

    </div>
      <div class="topnav">
        <a class="active" >checkout</a>


      </div>

      <div id="slider">
        <figure>
           <img src="../Image/welcome.jpg">
         <a href="../Piza.php"><img src="../Image/pizza.jpg"></a>
         <a href="../rice.php">  <img src="../Image/rice.jpg"></a>
          <a href="../drink.php"><img src="../Image/drink.jpg" ></a>
          <a href="../contact.php"><img src="../Image/Contactus.jpg" ></a>
        </figure>
      </div>

      <div class="bottomnav">
 jggggggggggggggggggggggggggggggggggggggg
 bbbbbbbbbbbbbbbbbbbbbb
        <a href="../Piza.html">  <img src="../Image/pizza.jpg"></a>
        <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
      aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
       <a href="../rice.html"><img src="../Image/rice.jpg"></a>
        <a href="../drink.html"><img src="../Image/drink.jpg" ></a>


      </div>

      <div class="fotter">
      ggggggggggggggggggggggggggggggggggggggggggggfffffffffffffffffffffffffffffff





      </div>


  </body>
</html>
