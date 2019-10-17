<?php
include 'connection.php';


   echo "Inserting data in the table";
   
   $user = $_POST['registerusername'];
   $pass = $_POST['password'];
   $confirmpass = $_POST['confirmpassword'];
   $country = $_POST['Country'];
   $gender  =$_POST['Gender'];
   $age  = $_POST['age'];
   

   if(isset($_POST["confirmpassword"])){
    
    if(strlen($confirmpass)==0){
        echo "<p style=\"color:red\">Please confirm your password</p>";    
    }
    else if($pass!=$confirmpass){
        echo "<p style=\"color:red\">Passwords do not match</p>";
        header("location: login-register.php");
    }
}   

   $sql = "INSERT INTO user SET username='$user', user_password='$pass', user_age='$age',user_gender='$gender',user_region='$country'";
   

   if (mysqli_query($conn, $sql)) {
       session_start();
       $_SESSION['username']=$user;
       header("location: main-page.php");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>