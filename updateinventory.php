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
   
$watchid=$_POST['watchid'];  
$brand=$_POST['brand'];
$description=$_POST['description'];
$category=$_POST['category'];
$price=$_POST['price'];
$amount=$_POST['amount'];
$strap=$_POST['strap'];
$color=$_POST['color'];

$watchid1=mysqli_real_escape_string($conn,$watchid);
$brand1=mysqli_real_escape_string($conn,$brand);
$description1=mysqli_real_escape_string($conn,$description);
$category1=mysqli_real_escape_string($conn,$category);
$price1=mysqli_real_escape_string($conn,$price);
$amount1=mysqli_real_escape_string($conn,$amount);
$strap1=mysqli_real_escape_string($conn,$strap);
$color1=mysqli_real_escape_string($conn,$color);
     
   
$sql = "UPDATE watches SET amount= '".$amount1."',brand= '".$brand1."',description= '".$description1."',category= '".$category1."',price= '".$price1."',strap= '".$strap1."',color= '".$color1."' WHERE id= '".$watchid1."'";
   
if (mysqli_query($conn, $sql)) {
    header ("location: inventory.php");	
   
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>