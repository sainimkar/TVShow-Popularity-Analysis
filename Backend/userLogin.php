<?php
include 'connection.php';


   echo "Trying to login ";
   
   $username = ($_POST['loginusername']);
$pass= $_POST['loginpassword'];
$sql = "SELECT user_password from user where username= '$username'";
$result = mysqli_query($conn,$sql);
if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count=mysqli_num_rows($result);
        echo "Checking for data:";
  
    
   
  if($count==1)
  {

	 if(($pass==$row['user_password']))
	 {
     session_start();
     $_SESSION['username']=$username;
     echo $_SESSION['username'] ;
     header("location: main-page.php");

		
		
	}
	else
	{
		echo "Username or Password is Invalid!<br>Click here to <a href='login-register.php'>try again.</a> ";
	}

  }
  else
  {
    header("location: login-register.php");

  }
  
   
       
       

   
 



?>