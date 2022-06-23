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
   
  
$id=$_POST['id'];
$username=$_POST['username'];
$email=$_POST['email'];
$request=$_POST['request'];
$request_status=$_POST['request_status'];

$id1=mysqli_real_escape_string($conn,$id);
$username1=mysqli_real_escape_string($conn,$username);
$email1=mysqli_real_escape_string($conn,$email);
$request1=mysqli_real_escape_string($conn,$request);
$request_status1=mysqli_real_escape_string($conn,$request_status);
     
   
$sql = "UPDATE requests SET request_status= '".$request_status1."' WHERE email= '".$email1."'";
   
if (mysqli_query($conn, $sql)) {
    header ("location: requests.php");	
   
} else {
   echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($conn);
?>