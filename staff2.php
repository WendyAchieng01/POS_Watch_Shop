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
$pass=$_POST['password'];

$user1=mysqli_real_escape_string($conn,$user);
$pass1=mysqli_real_escape_string($conn,$pass);

$sql_query="SELECT id from staff WHERE  username='$user1' AND password='$pass1' ";
$result = mysqli_query($conn,$sql_query);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	session_start();
	
	$_SESSION['username']=$user1;
	header ("location: adminhome.php");
		
}
else{
	session_start();
    $stafferror = "Invalid Username or Password!";
	$_SESSION['stafferror']=$stafferror;
    header ("location: staff.php");		
}
}	
?>