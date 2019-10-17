<?php
include 'connection.php';


   echo "Inserting data in the table";



$movie_name = $_POST['movie_name'];
   $movie_country = $_POST['movie_country'];
   $movie_genre = $_POST['movie_genre'];
   $movie_duration = $_POST['movie_duration'];
   $movie_sales = $_POST['movie_sales'];
   $movie_ratings = $_POST['movie_ratings'];
   $movie_date = $_POST['movie_release_year'];
   $movie_info = $_POST['movie_info'];
   $movie_views = $_POST['movie_views'];

   


   $sql = "INSERT INTO movies SET movie_name='$movie_name', movie_region='$movie_country', movie_genre='$movie_genre',movie_views='$movie_views',movie_ratings='$movie_ratings',movie_sales='$movie_sales',movie_release='$movie_date',movie_information='$movie_info'";
   

if (mysqli_query($conn, $sql)) {
    header("Location:add-movie.php");
 
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
?>