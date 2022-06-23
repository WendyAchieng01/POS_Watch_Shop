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
$last_name=$_POST['last_name'];
$user=$_POST['username'];
$pass=$_POST['password'];
$position_title=$_POST['position_title'];
$email=$_POST['email'];
$date_of_birth=$_POST['date_of_birth'];
$id_card_number=$_POST['id_card_number'];
$phone_number=$_POST['phone_number'];
$country_code=$_POST['country_code'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$address=$_POST['address'];


$first_name1=mysqli_real_escape_string($conn,$first_name);
$last_name1=mysqli_real_escape_string($conn,$last_name);
$user1=mysqli_real_escape_string($conn,$user);
$pass1=mysqli_real_escape_string($conn,$pass);
$position_title1=mysqli_real_escape_string($conn,$position_title);
$email1=mysqli_real_escape_string($conn,$email);
$date_of_birth1=mysqli_real_escape_string($conn,$date_of_birth);
$id_card_number1=mysqli_real_escape_string($conn,$id_card_number);
$phone_number1=mysqli_real_escape_string($conn,$phone_number);
$country_code1=mysqli_real_escape_string($conn,$country_code);
$gender1=mysqli_real_escape_string($conn,$gender);
$country1=mysqli_real_escape_string($conn,$country);
$address1=mysqli_real_escape_string($conn,$address);


//Writes the id_image to the server
if(move_uploaded_file($_FILES['id_image']['tmp_name'], $target)) {
    //Tells you if its all ok
    echo "The file ". basename( $_FILES['id_image']['name']). " has been uploaded, and your information has been added to the directory";

    //Writes the information to the database
    mysqli_query($conn,"INSERT INTO staff
    VALUES ('id','$first_name', '$last_name',
            '$last_name','$username','$password','$date_today','$position_title','$email','$date_of_birth','$id_card_number','$phone_number','$country_code','$gender','$county','$country','$address')") ;

    header ("Location: adminhome.php");
} else {
    //Gives and error if its not
    echo "Sorry, there was a problem uploading your file.";
}

?>