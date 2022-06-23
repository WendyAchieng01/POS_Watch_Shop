<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( isset( $_SESSION['username'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
	 header("Location: men.php"); 
	 
} else {
    // Redirect them to the login page
    header("Location: login.php");
}
?>