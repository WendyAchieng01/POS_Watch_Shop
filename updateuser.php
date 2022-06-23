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
   
$userid=$_POST['id'];
$first_name=$_POST['first_name'];
$second_name=$_POST['second_name'];
$last_name=$_POST['last_name'];
$pass=$_POST['password'];
$user=$_POST['username'];
$date_today=$_POST['date_today'];
$email=$_POST['email'];
$age=$_POST['age'];
$date_of_birth=$_POST['date_of_birth'];
$id_card_number=$_POST['id_card_number'];
$phone_number=$_POST['phone_number'];
$country_code=$_POST['country_code'];
$gender=$_POST['gender'];
$county=$_POST['county'];
$country=$_POST['country'];
$address=$_POST['address'];


$userid1=mysqli_real_escape_string($conn,$userid);
$user1=mysqli_real_escape_string($conn,$user);
$pass1=mysqli_real_escape_string($conn,$pass);
$first_name1=mysqli_real_escape_string($conn,$first_name);
$second_name1=mysqli_real_escape_string($conn,$second_name);
$last_name1=mysqli_real_escape_string($conn,$last_name);
$date_today1=mysqli_real_escape_string($conn,$date_today);
$email1=mysqli_real_escape_string($conn,$email);
$age1=mysqli_real_escape_string($conn,$age);
$date_of_birth1=mysqli_real_escape_string($conn,$date_of_birth);
$id_card_number1=mysqli_real_escape_string($conn,$id_card_number);
$phone_number1=mysqli_real_escape_string($conn,$phone_number);
$country_code1=mysqli_real_escape_string($conn,$country_code);
$gender1=mysqli_real_escape_string($conn,$gender);
$county1=mysqli_real_escape_string($conn,$county);
$country1=mysqli_real_escape_string($conn,$country);
$address1=mysqli_real_escape_string($conn,$address);
	
$sql = "UPDATE users SET first_name= '".$first_name1."',second_name= '".$second_name1."',last_name= '".$last_name1."',password= '".$pass1."',username= '".$user1."',date_today= '".$date_today1."',email= '".$email1."',age= '".$age1."',date_of_birth= '".$date_of_birth1."',id_card_number= '".$id_card_number1."',phone_number= '".$phone_number1."',country_code= '".$country_code1."',gender= '".$gender1."',county= '".$county1."',country= '".$country1."',address= '".$address1."' WHERE id= '".$userid1."'";
if (mysqli_query($conn, $sql)) {
    header ("location: totalusers.php");	
   
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>