<?php
include 'connection.php';


echo "Trying to login ";

$username = ($_POST['adminUsername']);
$pass= $_POST['adminPassword'];
$sql = "SELECT admin_password from admin where admin_username= '$username'";
$result = mysqli_query($conn,$sql);
if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
echo "Checking for data:";



if($count==1)
{

    if($row['admin_password']===$pass)
    {
        echo "You are currently logged in!";

    }
    else
    {

        echo "Username or Password is Invalid!<br>Click here to <a href='ladmin.php'>try again.</a> ";
    }

}
else
{
    header("location: ladmin.php");

}

?>