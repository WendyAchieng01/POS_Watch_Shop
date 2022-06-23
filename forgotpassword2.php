<?php
// Connects to your Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WATCHSHOP";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
	

if($_SERVER['REQUEST_METHOD']=='POST'){
	
$user=$_POST['username'];
$email=$_POST['email'];
$request=$_POST['request'];
$request_status=$_POST['request_status'];

$user1=mysqli_real_escape_string($conn,$user);
$email1=mysqli_real_escape_string($conn,$email);
$request1=mysqli_real_escape_string($conn,$request);
$request_status1=mysqli_real_escape_string($conn,$request_status);

$sql_query="SELECT id from users WHERE  username='$user1' AND email='$email1' ";
$result = mysqli_query($conn,$sql_query);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	$sql_query2="INSERT INTO requests (username,email,request,request_status) VALUES ('$user1','$email1','$request1','$request_status1')";
    if ($conn->query($sql_query2) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
	session_start();
	$accept = "We have sent you an Email!";
	$_SESSION['accept']=$accept;
	header ("location: forgotpassword.php");	
	}	

else{
	session_start();
    $accept = "Invalid Username or Email!";
	$_SESSION['accept']=$accept;
    header ("location: forgotpassword.php");			
}
}	
?>