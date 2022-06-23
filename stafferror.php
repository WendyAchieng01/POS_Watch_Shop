<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first


if ( isset( $_SESSION['stafferror'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
	  $stafferror = $_SESSION['stafferror'];
	  echo "$stafferror";
	 
} else {
    // Redirect them to the login page
    echo "";
}
?>