<?php
class db{
    
function OpenCon()
 {
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "abc_com";
 $conn = new mysqli($servername , $username, $password,$dbname) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function SelectQuery($conn,$sql)
 {
  $result = $conn->query($sql);
 return $result;
 }
 function CheckUsers($conn,$table,$userName,$password)
 {
  $result = $conn->query("SELECT * FROM ". $table." WHERE email='". $userName."' AND userPassword='". $password."'");
 return $result;
 }

 function insertUsers($conobj,$password,$fname, $lname,$type,$phone,$gender,$homeAddress,$email,$birth,$image)
 {
   $res=$conobj->prepare("INSERT INTO users(userPassword,firstname,lastname,userType,phone,gender,homeAddress,email,birthDate,imageName) VALUES (?,?,?,?,?,?,?,?,?,?)");
   $res->bind_param("ssssssssss",$password,$fname, $lname,$type,$phone,$gender,$homeAddress,$email,$birth,$image);
   if($res->execute())
   {
      $res->close();
      return TRUE;
   }
   else
   {
      return FALSE;
   }
 }



 function deleteEmp($con,$id)
 {
    $sql="DELETE from users WHERE id ='$id'";
    if($con->query($sql) === TRUE)
    {
        return TRUE;
    }
    else 
    {
       return FALSE;
    }
 }

 function deleteSeller($con,$userName)
 {
    $sql="DELETE from users WHERE email ='$userName'";
    if($con->query($sql) === TRUE)
    {
        return TRUE;
    }
    else 
    {
       return FALSE;
    }
 }


 
 function deleteBuyer($con,$userName)
 {
    $sql="DELETE from users WHERE email ='$userName'";
    if($con->query($sql) === TRUE)
    {
        return TRUE;
    }
    else 
    {
       return FALSE;
    }
 }
 function deleteAdmin($con,$userName)
 {
    $sql="DELETE from users WHERE email ='$userName'";
    if($con->query($sql) === TRUE)
    {
        return TRUE;
    }
    else 
    {
       return FALSE;
    }
 }

 function UpdateAdmin($conn,$table,$uname,$fname,$lname,$address,$phone,$gender)
 {
   $sql="UPDATE $table SET firstname='$fname',lastname='$lname', gender='$gender',phone='$phone',homeAddress='$address' WHERE email ='$uname'";
   if ($conn->query($sql) === TRUE) {
      $result="Record Updated successfully";
   } 
   else {
   $result="Error!";
   }
   return $result;
 }


 function UpdateSeller($conn,$table,$uname,$fname,$lname,$address,$phone,$gender)
 {
   $sql="UPDATE $table SET firstname='$fname',lastname='$lname', gender='$gender',phone='$phone',homeAddress='$address' WHERE email ='$uname'";
   if ($conn->query($sql) === TRUE) {
      $result="Record Updated successfully";
   } 
   else {
   $result="Error!";
   }
   return $result;
 }

 function UpdateBuyer($conn,$table,$uname,$fname,$lname,$address,$phone,$gender)
 {
   $sql="UPDATE $table SET firstname='$fname',lastname='$lname', gender='$gender',phone='$phone',homeAddress='$address' WHERE email ='$uname'";
   if ($conn->query($sql) === TRUE) {
      $result="Record Updated successfully";
   } 
   else {
   $result="Error!";
   }
   return $result;
 }


 function updateUsers($con,$table,$fname,$lname,$phone,$gender,$homeAddress,$email,$birth,$type)
 {
   if($type != " ")
   {
      $sql="UPDATE $table SET firstname='$fname',lastname='$lname', gender='$gender',phone='$phone',userType='$type',homeAddress='$homeAddress',blood='$blood',birthDate='$birth' WHERE email ='$email'";
   }
   else if($type ==" ")
   {
      $sql="UPDATE $table SET firstname='$fname',lastname='$lname', gender='$gender',phone='$phone',homeAddress='$homeAddress',birthDate='$birth' WHERE email ='$email'";
   }
    if($con->query($sql) === TRUE)
    {
        $con->close();
        return TRUE;
    }
    else 
    {
       return FALSE;
    }
 }

 function showMyProfile($conn,$table,$email)
 {
    $result = $conn->query("SELECT * FROM ". $table."  WHERE email='". $email."'");
    return $result;
 }



function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>