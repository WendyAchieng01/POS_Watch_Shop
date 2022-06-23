<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'WATCHSHOP';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
session_start();    
   
$user = $_SESSION['username'];
  
$sql = "DELETE FROM cart WHERE  username LIKE '%".$user."%'";
   
if (mysqli_query($conn, $sql)) {
      header("location: cart.php");
} else {
      echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>