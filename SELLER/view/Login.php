<?php
include('../control/LoginValidation.php');
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>

    <style>
      span{
        color:red;
      }
    </style>
    </head>
    <body>
   <div class="sticky">
   <div><h2> ABC.COM</h2></div>
   
   <header>
<?php include 'header\header.php';?>
</header>
   
  </div>
</div>


  <center> <fieldset>
    
  
    <p><?php echo $error; ?></p>
     <br>
     <legend ><h3>Login</h3></legend>
      <form action="" method="post">

      Email :
      
      <input type="text" placeholder="Email address" id="userName" name="userName" >
      <span>*</span> 
        <br> <br>

        Password:
        <input type="password" placeholder="Password" id="password" name="password" > 
        <span>*</span>
        <br> <br>
        <input type="checkbox" id="remember" name="remember" value="1">Remember Me 
        <br> <br>
        <input type="submit" name = "submit" value="LOGIN">
        <br> <br>
        Want to register yourself? <a href="registration.php"> register here </a>
        <br> <br>
       
     <br> <br>
     <br> <br>
      </form>

    </table>
    

      </center>

  


<br><br>

<br>

<br><br>
<div class="footer">

  <p><a href="AboutUs.php">About Us</a></p>

    </body>
</html>