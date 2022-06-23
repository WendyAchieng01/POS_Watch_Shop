<?php
// Connects to your Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WATCHSHOP";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Taking all values from the form data(input)
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $username =  $_REQUEST['username'];
        $password =  $_REQUEST['password'];
        $position_title =  $_REQUEST['position_title'];
        $email =  $_REQUEST['email'];
        $date_of_birth =  $_REQUEST['date_of_birth'];
        $id_card_number =  $_REQUEST['id_card_number'];
        $phone_number =  $_REQUEST['phone_number'];
        $country_code =  $_REQUEST['country_code'];
        $gender =  $_REQUEST['gender'];
        $country =  $_REQUEST['country'];
        $address = $_REQUEST['address'];
        
        
          
        // Performing insert query execution
        // here our table name is staff
        $sql = "INSERT INTO staff  VALUES ('$first_name', 
            '$last_name','$username','$password','$position_title','$email','$date_of_birth','$id_card_number','$phone_number','$country_code','$gender','$country','$address')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>You have successfully registered.</h3>"; 
            header ("Location: staff.php"); 
        } else{
            //Gives and error if its not
    echo "Sorry, there was a problem uploading your file.";
        }
          
        // Close connection
        mysqli_close($conn);
        ?>