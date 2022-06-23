<?php
// Connects to your Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WATCHSHOP";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
	


//This gets all the other information from the form


$first_name=$_POST['first_name'];
$second_name=$_POST['second_name'];
$last_name=$_POST['last_name'];
$date_today=$_POST['date_today'];
$email=$_POST['email'];
$phone_number=$_POST['phone_number'];
$country_code=$_POST['country_code'];
$message=$_POST['message'];
$request_status=$_POST['request_status'];


$first_name1=mysqli_real_escape_string($conn,$first_name);
$second_name1=mysqli_real_escape_string($conn,$second_name);
$last_name1=mysqli_real_escape_string($conn,$last_name);
$date_today1=mysqli_real_escape_string($conn,$date_today);
$email1=mysqli_real_escape_string($conn,$email);
$phone_number1=mysqli_real_escape_string($conn,$phone_number);
$country_code1=mysqli_real_escape_string($conn,$country_code);
$message1=mysqli_real_escape_string($conn,$message);
$request_status1=mysqli_real_escape_string($conn,$request_status);

//Writes the information to the database
mysqli_query($conn,"INSERT INTO contacts (first_name,second_name,last_name,date_today,email,phone_number,country_code,message,request_status)
VALUES ('$first_name1','$second_name1','$last_name1','$date_today1','$email1','$phone_number1','$country_code1','$message1','$request_status1')") ;



session_start();
    $contacttext = "Your message has been sent";
	$_SESSION['$contacttext']=$contacttext;
	
header ("Location: contact.php");




?>