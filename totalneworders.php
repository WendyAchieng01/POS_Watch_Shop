<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WATCHSHOP";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result=mysqli_query($conn,"SELECT count(*) as total FROM orders WHERE payment_status LIKE 'Pending'");
$data=mysqli_fetch_assoc($result);
echo $data['total'];

?>