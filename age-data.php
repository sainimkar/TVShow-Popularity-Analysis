<?php
session_start();


//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'dbmsproject');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){

    die("Connection failed: " . $mysqli->error);
}



//query to get data from the table
$query1 = sprintf("SELECT count(*) as a from ushow_analytics where show_id = ".$_SESSION['showid']." and movie_id = ".$_SESSION['movieid']."  and user_id IN (select user_id from user where user_age<18) ");

$query2 = sprintf("SELECT count(*) as b from ushow_analytics where show_id=".$_SESSION['showid']." and movie_id = ".$_SESSION['movieid']." and user_id IN (select user_id from user where user_age>18 and user_age<40)");

$query3 = sprintf("SELECT count(*) as c from ushow_analytics where show_id=".$_SESSION['showid']." and movie_id = ".$_SESSION['movieid']." and user_id IN (select user_id from user where user_age>40 and user_age<75)");

//$result1 = $mysqli->query($query1);
//$result2 = $mysqli->query($query2);
//$result3 = $mysqli->query($query3);

$result1 = mysqli_query($mysqli,$query1);
$row1 = mysqli_fetch_array($result1);


$result2 = mysqli_query($mysqli,$query2);
$row2 = mysqli_fetch_array($result2);


$result3 = mysqli_query($mysqli,$query3);
$row3 = mysqli_fetch_array($result3);



$object =  array(array("agegroup"=>1,"count" => $row1['a']) , array("agegroup"=>2,"count" => $row2['b']), array("agegroup"=>3,"count" => $row3['c']) );

$myJSON = json_encode($object);

echo $myJSON;

//execute query
/*$result = $mysqli->query($finalquery);

//loop through the returned data
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);*/

