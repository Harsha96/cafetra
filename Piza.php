<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
            include('connection.php');
     ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cafetra</title>
    <link rel="stylesheet" href="cafetra.css">

  </head>
  <body>

    <div class="my">
          <h1 class="header"><a href="cafetra.php">Cafetra</a>
        <button type="button" name="button" class="buy">Order</button>
      </h1>
    </div>

      <div class="topnav">
        <a href="cafetra.php">Home</a>
        <a  class="active" href="Piza.php">Piza</a>
        <a href="rice.php">Rice</a>
        <a href="drink.php">Drinks</a>
        <a href="contact.php">Contact</a>
        <a href="about.php">About</a>
        <a href="http://localhost/tma1/registration/login.php" style="float:right;">Log In</a>
      </div>
      <div class="pageT">
         <b>piza zone</b>
      </div>
      <h1 class="Subv">VEGI CONNER</h1>

    <div class="product-container">

      <div class="products">
        <b>Indian Pizza</b>
        <img  src="Image/indian-pizzza.jpg"width="100%" height="100%">
        <?php
        $sql="SELECT * FROM products WHERE catagory=3 ORDER BY name ASC";
              $query=mysqli_query($conn , $sql);
              while ($row=mysqli_fetch_array($query)) { ?>
        <table>
          <tr>
            <a name="fgf">Piza name</a>
            <td>size</td>
            <td>Lage</td>
            <td>Medium</td>
            <td>Small</td>
          </tr>
          <tr>
            <td>price</td>
            <td></td>
            <td>1</td>
            <td><?php echo $row['name'] ?></td>
          </tr>
        </table>
        <button type="button" name="button">ORDER NOW</button>
        <<?php } ?>
      </div>
        <div class="products">
          <b>Italian Pizza</b>
          <img src="Image/italian-pizza.jpg" width="100%" height="100%">
          <table>
            <tr>
              <a>Piza name</a>
              <td>size</td>
              <td>Lage</td>
              <td>Medium</td>
              <td>Small</td>
            </tr>
            <tr>
              <td>price</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
            </tr>
          </table>
          <button type="button" name="button">ORDER NOW</button>

        </div>
        <div class="products">
         <b>Localize Pizza</b>
                <img src="Image/srilankan-piza.jpg" width="100%" height="100%">
                <table>
                  <tr>
                    <a>Piza name</a>
                    <td>size</td>
                    <td>Lage</td>
                    <td>Medium</td>
                    <td>Small</td>
                  </tr>
                  <tr>
                    <td>price</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                  </tr>
                </table>
                <button type="button" name="button" >ORDER NOW</button>
        </div>

      </div>
      <div class="space"style="color:DodgerBlue;">
        <a style="font-color:DodgerBlue;">a</a>

      </div>


      <h1 class="SubNV">NONE VEGI CONNER</h1>

    <div class="product-container">

      <div class="products">
        <b>Indian Pizza</b>
        <img  src="Image/indian-pizzza.jpg"width="100%" height="100%">
        <table style="background-color:red;">
          <tr>
            <a style="background-color:red;">Piza name</a>
            <td>size</td>
            <td>Lage</td>
            <td>Medium</td>
            <td>Small</td>
          </tr>
          <tr>
            <td>price</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
        </table>
        <button type="button" name="button">ORDER NOW</button>

      </div>
      <div class="products">
        <b>Italian Pizza</b>
        <img src="Image/italian-pizza.jpg" width="100%" height="100%">
        <table style="background-color:red;">
          <tr>
            <a style="background-color:red;">Piza name</a>
            <td>size</td>
            <td>Lage</td>
            <td>Medium</td>
            <td>Small</td>
          </tr>
          <tr>
            <td>price</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
        </table>
        <button type="button" name="button">ORDER NOW</button>

      </div>
      <div class="products">
       <b>SriLankan Pizza</b>
              <img src="Image/srilankan-piza.jpg" width="100%" height="100%">
              <table style="background-color:red;">
                <tr>
                  <a style="background-color:red;">Piza name</a>
                  <td>size</td>
                  <td>Lage</td>
                  <td>Medium</td>
                  <td>Small</td>
                </tr>
                <tr>
                  <td>price</td>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                </tr>
              </table>
              <button type="button" name="button" >ORDER NOW</button>
      </div>

    </div>


      <div id="slider">
        <figure>
            <a href="drink.php"><img src="Image/drink.jpg" ></a>
         <a href="Piza.php"><img src="Image/pizza.jpg"></a>
         <a href="rice.php">  <img src="Image/rice.jpg"></a>
          <a href="drink.php"><img src="Image/drink.jpg" ></a>
          <a href="contact.php"><img src="Image/Contactus.jpg" ></a>
        </figure>
      </div>


      <div class="fotter">


      </div>


  </body>
</html>
