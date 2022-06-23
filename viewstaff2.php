<!DOCTYPE html> 
<html> 
<head>
<!-- Provide list of keywords -->
<meta name = "keywords" content = "C, C++, Java, PHP, Perl, Python">

<!-- Author information -->
<meta name = "author" content = "Wendy Achieng">

<!-- Page content type -->
<meta http-equiv = "content-type" content = "text/html; charset = UTF-8">

<!-- Tag to tell robots not to index the content of a page -->
<meta name = "robots" content = "noindex, nofollow">

<!-- Tag to fit page contents to all devices -->
<meta name="viewport" content="width=device-width, initial-scale=1"> 
    
<title>All Staff |</title> 
	
<link rel = "stylesheet" type = "text/css" href = "css/style.css">

<script type = "text/JavaScript">   
 
</script> 

</head> 
  
<body> 
      
   
      
    <!-- Body section -->
    <div class = "body_sec1"> 
	   <h3 class = "body_sec1_header">All Staff</h3>
        <table class ="body_sec1_table">
		 <tr>
		   <td>
		   <a href = "viewstaff.php"><input type = 'button' class = 'staff_profile_button' value = 'Go Back' name = 'btn'></input></a>
		   </td>
		 </tr>
         <tr>
		 
            <th>
			<h2 class = "body_sec1_table_headers">All Staff Members</h2>
			</th>
			
         </tr>
         
         <tr>
            <td>
			<div>
			 <center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WATCHSHOP";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
$sql = "SELECT * FROM staff";
$result = $conn->query($sql);
$counter = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<table>";
		
		
		
		 $imageURL = 'uploads/staffidimages/'.$row["id_image"];
		 $first_name = $row["first_name"];
		 $second_name = $row["second_name"];
		 $last_name = $row["last_name"];
		 $user = $row["username"];
		 $position = $row["position_title"];
		
		
		
		echo "<td>";
		echo "<form action = 'staffprofile.php' method = 'post'>";
		
		echo "<img src='$imageURL' height = '200' width = '200' class='responsive'>";
		echo "<br>";
		
		
		echo "Username:<input type=text name='staff_user_name' value='$user' class='formcell2'  readonly/>";
		echo "<br>";
		
		echo "Position:<input type=text name='position' value='$position' class='formcell2'  readonly/>";
		echo "<br>";
		
		echo "<input type = 'submit' class = 'staff_profile_button' value = 'View More' name = 'more'></input>";
		echo "</form>";
		echo "</td>";
		
		echo "</table";
		
		$counter = $counter + 1;
		if ($counter%4 == 0){
			echo "<br>";
		} 
    }
	
} else {
    echo "0 results";
}
$conn->close();

?>
			</center>
            </div>			 
			</td>
			
         </tr>		
        </table> 
    </div>
	
	
      
    
</body> 
</html> 