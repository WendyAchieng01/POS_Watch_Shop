<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'WATCHSHOP';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
session_start();    
   
$orderid = $_SESSION['$orderid'];
  
$sql = "DELETE FROM orders WHERE  id LIKE '%".$orderid."%'";
   
if (mysqli_query($conn, $sql)) {
      header ("location: orders.php");
} else {
      echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>