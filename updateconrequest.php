<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'WATCHSHOP';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully<br>';
   
  
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
     
   
$sql = "UPDATE contacts SET request_status= '".$request_status1."' WHERE email= '".$email1."'";
   
if (mysqli_query($conn, $sql)) {
    header ("location: contactrequests.php");	
   
} else {
   echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($conn);
?>