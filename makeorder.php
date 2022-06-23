<?php
// Connects to your Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WATCHSHOP";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
	
//This gets all the other information from the form

$user=$_POST['username'];
$watch_id=$_POST['watch_id'];
$brand=$_POST['brand'];
$description=$_POST['description'];
$category=$_POST['category'];
$price=$_POST['price'];
$selectedno=$_POST['selectedno'];
$strap=$_POST['strap'];
$color=$_POST['color'];
$payment_status=$_POST['payment_status'];
$received=$_POST['received'];
$date=$_POST['date'];

$total = $price*$selectedno;


$user1=mysqli_real_escape_string($conn,$user);
$watch_id1=mysqli_real_escape_string($conn,$watch_id);
$brand1=mysqli_real_escape_string($conn,$brand);
$description1=mysqli_real_escape_string($conn,$description);
$category1=mysqli_real_escape_string($conn,$category);
$price1=mysqli_real_escape_string($conn,$price);
$amount1=mysqli_real_escape_string($conn,$selectedno);
$strap1=mysqli_real_escape_string($conn,$strap);
$color1=mysqli_real_escape_string($conn,$color);
$total1=mysqli_real_escape_string($conn,$total);
$payment_status1=mysqli_real_escape_string($conn,$payment_status);
$received1=mysqli_real_escape_string($conn,$received);
$date1=mysqli_real_escape_string($conn,$date);	

//Writes the information to the database
mysqli_query($conn,"INSERT INTO orders (watch_id,username,brand,description,category,price,amount,strap,color,total,payment_status,received,date)
VALUES ('$watch_id1','$user1','$brand1','$description1','$category1','$price1','$amount1','$strap1','$color1','$total1','$payment_status1','$received1','$date1')") ;


header ("location: orders.php");		



?>