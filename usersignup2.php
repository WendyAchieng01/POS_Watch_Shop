<?php
// Connects to your Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WATCHSHOP";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
	
//This is the directory where images will be saved
$target = "uploads/idimages/";
$target = $target . basename( $_FILES['id_image']['name']);

//This gets all the other information from the form

$id_image=basename( $_FILES['id_image']['name']);
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
	
$sql_query="SELECT id from users WHERE  username='$user1'";
$result = mysqli_query($conn,$sql_query);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	echo "Username already exists";
}
else{
//Writes the id_image to the server
if(move_uploaded_file($_FILES['id_image']['tmp_name'], $target)) {
    //Tells you if its all ok
    echo "The file ". basename( $_FILES['id_image']['name']). " has been uploaded, and your information has been added to the directory";

    //Writes the information to the database
    mysqli_query($conn,"INSERT INTO users (first_name,second_name,last_name,password,username,date_today,email,age,date_of_birth,id_card_number,id_image,phone_number,country_code,gender,county,country,address)
    VALUES ('$first_name1','$second_name1','$last_name1','$pass1','$user1','$date_today1','$email1','$age1','$date_of_birth1','$id_card_number1','$id_image','$phone_number1','$country_code1','$gender1','$county1','$country1','$address1')") ;

    header ("Location: totalusers.php");
} else {
    //Gives and error if its not
    echo "Sorry, there was a problem uploading your file.";
}

}

?>