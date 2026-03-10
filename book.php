<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

$host = "localhost";
$user = "traveluser";
$password = "Travel@123";
$dbname = "travel_agency";

$conn = new mysqli($host,$user,$password,$dbname);

if($conn->connect_error){
die("Connection Failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$destination = $_POST['destination'];
$travel_date = $_POST['travel_date'];
$persons = $_POST['persons'];

$sql = "INSERT INTO bookings(name,email,phone,destination,travel_date,persons)
VALUES('$name','$email','$phone','$destination','$travel_date','$persons')";

if($conn->query($sql)){
header("Location: payment.html");
}
else{
echo "Database Error: " . $conn->error;
}

$conn->close();

?>
