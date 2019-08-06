<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
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
      <a href="Piza.php">Piza</a>
      <a  href="rice.php">Rice</a>
      <a href="drink.php">Drinks</a>
      <a class="active"  href="contact.php">Contact</a>
      <a href="http://localhost/tma1/registration/login.php" style="float:right;">Log In</a>

      <a href="about.php">About</a>
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
         <h1 style="padding-left:500px;">Get in touch with us</h1>

            <div class="product-container">


              <div class="products">
                <p>Cafetra is the leading provider of various kind of
                   foods and drinks, trusted by more than 1million people
                    and won many awards during pased few decades . Feel free
                     to contacat us at any time, so you can deliver results.</p>

                <b>Fill out the form or contact us at 1000560000 or 1000570000
                     <b>Opens at 9.30am-8.30pm </b>
                </b>

              </div>

              <div class="products"style="width:50%;height: 100px;">
              <h1 style="text-align: center;">Contact Us</h1>
               <form class="" action="contact.php" method="post">

                 <div class="group"style="margin: 10px 0px 10px 0px;">
                   <label style="display: block;text-align: left;margin: 3px;">Name</label>
                   <input style="height: 30px;width: 93%; padding: 5px 10px; font-size: 16px;border-radius: 5px; border: 1px solid gray;"
                   type="text" name="username" value="<?php echo $username; ?>">
                 </div>
                 <div class="group"style="margin: 10px 0px 10px 0px;">
                   <label style="display: block;text-align: left;margin: 3px;">Email</label>
                   <input style="height: 30px;width: 93%; padding: 5px 10px; font-size: 16px;border-radius: 5px; border: 1px solid gray;"
                    type="email" name="email" value="<?php echo $email; ?>">
                 </div>
                  <div class="input-group"style="margin: 10px 0px 10px 0px;">
                    <label  style="display: block;text-align: left;margin: 3px;">Telepone Number</label>
                    <input style="height: 30px;width: 93%; padding: 5px 10px; font-size: 16px;border-radius: 5px; border: 1px solid gray;"
                     type="email" name="email" value="<?php echo $payment; ?>">
                  </div>
                 <div class="input-group"style="margin: 10px 0px 10px 0px;">
                   <label  style="display: block;text-align: left;margin: 3px;">Comment</label>
                   <input style="height: 30px;width: 93%; padding: 5px 10px; font-size: 16px;border-radius: 5px; border: 1px solid gray;"
                    type="text" name="password_1">
                 </div>

                 <div class="input-group"style="margin: 10px 0px 10px 0px;">
                   <button type="submit" class="btn" name="reg_user">Submit</button>
                 </div>

               </form>



              </div>

            </div>

</div>
      <div class="fotter">


      </div>


  </body>
</html>
