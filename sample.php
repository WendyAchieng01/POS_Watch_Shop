<?php
// Connects to your Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WATCHSHOP";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}
  
 // Taking all values from the form data(input)
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $username =  $_REQUEST['username'];
        $password =  $_REQUEST['password'];
        $email =  $_REQUEST['email'];
        $age =  $_REQUEST['age'];
        $phone_number =  $_REQUEST['phone_number'];
        $gender =  $_REQUEST['gender'];
        $country =  $_REQUEST['country'];
        $address = $_REQUEST['address'];
        $id_card_number =  $_REQUEST['id_card_number'];
        $country_code =  $_REQUEST['country_code'];
          
        // Performing insert query execution
        // here our table name is users
        $sql = "INSERT INTO users  VALUES ('id','$first_name', 
            '$last_name','$username','$password','$email','$age','$phone_number','$gender','$country','$address','$id_card_number','$country_code')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>You have successfully registered.</h3>"; 
            header ("Location: login.php"); 
        } else{
            //Gives and error if its not
    echo "Sorry, there was a problem uploading your file.";
        }
          
        // Close connection
        mysqli_close($conn);
        ?>