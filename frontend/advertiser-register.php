<?php
include 'connection.php';


   echo "Inserting data in the table";
   
   $companyName = $_POST['companyName'];
   $companyBudget = $_POST['companyBudget'];
   $productName = $_POST['productName'];
      

   

   $sql = "INSERT INTO advertisers SET companyName='$companyName', companyBudget='$companyBudget', productName='$productName'";
   

   if (mysqli_query($conn, $sql)) {
   header("Location:advertiser-ui.php");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>