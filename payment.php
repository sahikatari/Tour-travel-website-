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
$amount = $_POST['amount'];
$payment_method = $_POST['payment_method'];
$card_number = $_POST['card_number'];
$expiry = $_POST['expiry'];
$cvv = $_POST['cvv'];

$sql = "INSERT INTO payments(name,email,amount,payment_method,card_number,expiry,cvv)
VALUES('$name','$email','$amount','$payment_method','$card_number','$expiry','$cvv')";

if($conn->query($sql)){
echo "<h2>Payment Successful</h2>";
echo "<a href='book.html'>Book Another Trip</a>";
}
else{
echo "Payment Error: " . $conn->error;
}

$conn->close();

?>
