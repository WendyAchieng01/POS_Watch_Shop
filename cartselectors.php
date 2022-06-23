<?php
// Connects to your Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WATCHSHOP";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

//This gets all the other information from the form
if($_SERVER['REQUEST_METHOD']=='POST'){
	
$selector=$_POST['action'];

switch($selector){
	case "MAKE ORDER":
	include ("makeorder.php"); 
	break;
	case "REMOVE":
	header ("location: removefromcart.php"); 
	break;
	case "REMOVE ORDER":
	header ("location: removeorder.php");  
	break;
	case "PAID":
	header ("location: orders.php"); 
	break;
	
 }
}
?>