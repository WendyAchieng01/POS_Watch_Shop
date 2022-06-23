<?php
// Connects to your Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WATCHSHOP";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
	
//This is the directory where images will be saved
$target = "uploads/watchimages/";
$target = $target . basename( $_FILES['watch_image']['name']);

//This gets all the other information from the form


$brand=$_POST['brand'];
$description=$_POST['description'];
$category=$_POST['category'];
$price=$_POST['price'];
$amount=$_POST['amount'];
$strap=$_POST['strap'];
$color=$_POST['color'];
$watch_image=basename( $_FILES['watch_image']['name']);



$brand1=mysqli_real_escape_string($conn,$brand);
$description1=mysqli_real_escape_string($conn,$description);
$category1=mysqli_real_escape_string($conn,$category);
$price1=mysqli_real_escape_string($conn,$price);
$amount1=mysqli_real_escape_string($conn,$amount);
$strap1=mysqli_real_escape_string($conn,$strap);
$color1=mysqli_real_escape_string($conn,$color);

	
//Writes the id_image to the server
if(move_uploaded_file($_FILES['watch_image']['tmp_name'], $target)) {
    //Tells you if its all ok
    echo "The file ". basename( $_FILES['watch_image']['name']). " has been uploaded, and your information has been added to the directory";

    //Writes the information to the database
    mysqli_query($conn,"INSERT INTO watches (brand,description,category,price,amount,strap,color,watch_image)
    VALUES ('$brand1','$description1','$category1','$price1','$amount1','$strap1','$color1','$watch_image')") ;

    header ("Location: inventory.php");
} else {
    //Gives and error if its not
    echo "Sorry, there was a problem uploading your file.";
}

?>