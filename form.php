<?php
if (isset($_POST['submit'])) {
  $username=$_POST['username'];
  $mailFrom=$_POST['Email'];
  $TeleponeNumber=$_POST['TeleponeNumber'];
  $Comment=$_POST['Comment'];

  $mailto="http://localhost/tma1/admin.php";
  $headers="From".$mailFrom;
  $txt="you have recived an contact reqest from".$username.".\n\n".$Email."Tel".$TeleponeNumber."comment".$Comment;

mail($mailto,$headers,$txt);
header("Location:contact.php");

$db = mysqli_connect('localhost', 'root', '', 'cafetra');
 $sql="INSERT INTO contact ( email, txt)
      VALUES('$mailFrom', '$txt')";
  }    
?>
