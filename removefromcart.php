<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'WATCHSHOP';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
session_start();    
   
$cartid = $_SESSION['$cartid'];
  
$sql = "DELETE FROM cart WHERE  id LIKE '%".$cartid."%'";
   
if (mysqli_query($conn, $sql)) {
      header ("location: cart.php");
} else {
      echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>