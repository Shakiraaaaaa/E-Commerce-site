
<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
setcookie('userName',$_POST['userName'],time()-1);
header("Location: Login.php"); // Redirecting To Home Page
}
?>

<html>
    
<head>
        <link rel="stylesheet" href="mystyle.css">
        <style>

            a:link, a:visited{
                background-color:rgb(179, 173, 230);
                color:black;
                padding: 14px 20px;
                text-align: center;
                text-decoration: darkblue;
                display: inline-block;
                
            }

            a:hover,a:active{
                background-color: rgba(255, 0, 0, 0.438);
            }
            
            </style> 
    </head>
   
    <body>
        
        