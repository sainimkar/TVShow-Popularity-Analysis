<?php
include 'connection.php';


   echo "Inserting data in the table";
   
   $show_name = $_POST['show_name'];
   echo '<br>';
   echo $show_name;
   $show_country = $_POST['show_country'];
   $show_genre = $_POST['show_genre'];
   $show_seasons = $_POST['show_seasons'];
   $show_views = $_POST['show_views'];
   $show_sales = $_POST['show_sales'];
   $show_ratings = $_POST['show_ratings'];
   $show_date = $_POST['show_date'];
   $show_info = $_POST['show_info'];
   
   $sql = "INSERT INTO shows SET show_name='$show_name',show_region='$show_country',show_genre='$show_genre',show_seasons='$show_seasons',show_views='$show_views',show_ratings='$show_ratings',show_sales='$show_sales',show_date='$show_date',show_info='show_info'";
   

   if (mysqli_query($conn, $sql)) {
    echo "Show Added sucessfully";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

   ?>