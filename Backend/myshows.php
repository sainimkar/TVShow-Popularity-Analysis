

<?php
session_start();
include 'connection.php';
$error ="";
$username = $_SESSION['username'];

$query = "SELECT user_id from user WHERE username='" .  $username . " '";
$result = mysqli_query($conn,$query) ;

if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}
$row = mysqli_fetch_assoc($result);


$show_id = $_GET['show_id'];
$user_id = $row['user_id'];


$sql = "INSERT INTO myshows SET user_id='$user_id', show_id='$show_id'";

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

    $sales1 = $_SESSION['show_sales'] + 1;

    $sql = "UPDATE shows SET show_sales='.$sales1.' where show_id = '.$show_id'" ;
    if (mysqli_query($conn, $sql)){
        header("location: my-shows-front.php");
    }else{
        echo "hi";
    }

    //header("location: my-shows-front.php");

} else {


    $error =  $conn->error;

    //echo "Error: <br>" . $conn->error;

   //header("location: ");
}
?>

<script>
    alert("<?php echo $conn->error ?>")
    locaton="my-shows-front.php"
</script>


