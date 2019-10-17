<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
session_start();
include 'connection.php';
$username = $_SESSION['username'];

$query = "SELECT user_id from user WHERE username='" .  $username . " '";
$result = mysqli_query($conn,$query) ;

if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}
$row = mysqli_fetch_assoc($result);


$movie_id = $_GET['movie_id'];
$user_id = $row['user_id'];


$sql = "INSERT INTO myshows SET user_id='$user_id', movie_id='$movie_id'";

/*if ($result->num_rows > 0) {

    echo "hello";
    while($row = $result->fetch_assoc()) {
        //  echo ". $row['sales']. ";
        $user_id=$row['user_id'];

    }
}
echo $user_id;
$show_id = $_GET['showid'];*/

if (mysqli_query($conn, $sql)) {

    header("location: my-shows-front.php");

} else {

    header("location: my-shows-front.php");
}
?>

<div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Thank you for pre-registering!</h4>
            </div>
            <div class="modal-body">
                <p>Thanks for getting in touch!</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

