<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( isset( $_SESSION['username'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
	 $user = $_SESSION['username'];
	 echo "<a href = 'logout.php' class = 'menu_link'>Logout</a>";
	 echo "<a href = '#' class = 'menu_link'>($user)</a>";
} else {
    // Redirect them to the login page
	echo "<a href = 'login.php' class = 'menu_link'>Login</a>";
    echo "<a href = 'signup.php' class = 'menu_link'>Sign Up</a>";
}
?>