<?php  

session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
 
       <title>Seller Home</title> 
       <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>

    <div class="header"><h2>ABC.COM</h2></div>

    <ul>
  
  <li><a href="SellerHome.php"> Home </a> </li>
  <li><a href="SellerProfile.php"> Profile </a></li>
  <li><a href="AddProduct.php"> Add New Product </a></li>
  <li><a href="CheckOrder.php"> Check Order & Delivery </a></li>
  <li><a href="Logout.php">Logout</a></li> 

  </ul>
  
</div>

<center>

 <?php
 echo "<h4> Logged Email as: ".$_SESSION['userName'].", Welcome Seller to Homepage"."</h4>";

 ?>
    <h3>Do you want to <a href="Logout.php">Logout</a></h3>
</center>

<br><br>
<br><br>

<br><br>




<br>

  <p><a href="AboutUs.php">About Us</a></p>
</div>
    </body>
</html>