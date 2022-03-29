<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Document</title>
  <style>
  p{
    color:red;
  }
  </style>
</head>
<body>


<?php
include('../model/model.php');

session_start();
$error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['userName'])) {
$error = "*Enter your email";
}
else if (empty($_POST['password'])){
  $error = "*Enter your password";
}
else if (!filter_var($_POST['userName'], FILTER_VALIDATE_EMAIL)){
  $error = "*Invalid email format";

 }

else
{
$userName=$_POST['userName'];
$password=$_POST['password'];
// $rem=$_POST['remember'];
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery = $connection->CheckUsers($conobj,"users",$userName,$password);

if ($userQuery->num_rows > 0)
{
  while($row = mysqli_fetch_assoc($userQuery))
  {
    //<?php echo $row["userType"]
    if($row["userType"] == "Admin")
    {
      if(isset($_POST['remember'])){
        setcookie('userName',$_POST['userName'],time()+60*60*7);
      }
      $_SESSION["userName"] = $userName;
      $_SESSION["password"] = $password;
      header('Location: AdminDashboard.php');
    }
    else if($row["userType"] == "Buyer")
    {
      if(isset($_POST['remember'])){
        setcookie('userName',$_POST['userName'],time()+60*60*7);
      }
      $_SESSION["userName"] = $userName;
      $_SESSION["password"] = $password;
     

      header('Location: ../view/BuyerHome.php');
    }
    else if($row["userType"] == "Seller")
    {
      if(isset($_POST['remember'])){
        setcookie('userName',$_POST['userName'],time()+60*60*7);
      }
      $_SESSION["userName"] = $userName;
      $_SESSION["password"] = $password;
      header('Location: SellerHome.php');
    }
    else if($row["userType"] == "Manager")
    {
      if(isset($_POST['remember'])){
        setcookie('userName',$_POST['userName'],time()+60*60*7);
      }
      $_SESSION["userName"] = $userName;
      $_SESSION["password"] = $password;
      header('Location: ManagerHome.php');
    }
    
  }
}
 else {
$error = "*Username or Password is invalid</p>";
}
$connection->CloseCon($conobj);

}
}


?>

  
</body>
</html>


