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
 
<title>Search Staff |</title>
 
<link rel = "stylesheet" type = "text/css" href = "css/style.css">

<script type = "text/JavaScript">   

</script> 
 
</head> 
  
<body> 
      
    
      
    <!-- Body section -->
    <div class = "body_sec1"> 
	   <h3 class = "body_sec1_header">Search Staff</h3>
        <table class ="body_sec1_table">
         <tr>
		 
            <th>
			<h2 class = "body_sec1_table_headers">Search Results</h2>
			</th>
			
         </tr>
         
         <tr>
           <td>
			<div>
			 <center>
			 <table class = "viewstaff_table" > 
			  	
				 <tr>			
                     <td>
					  
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

$search_staff=$_POST['search_staff'];
$search_staff1=mysqli_real_escape_string($conn,$search_staff);
	
$sql = "SELECT * FROM staff WHERE  username LIKE '%".$search_staff1."%' OR first_name LIKE '%".$search_staff1."%' OR second_name LIKE '%".$search_staff1."%' OR last_name LIKE '%".$search_staff1."%' ";
$result = $conn->query($sql);

$staffcounter = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<table>";
		
		
		
		 $imageURL = 'uploads/staffidimages/'.$row["id_image"];
		 $id = $row["id"];
		 $first_name = $row["first_name"];
		 $second_name = $row["second_name"];
		 $last_name = $row["last_name"];
		 $user = $row["username"];
		 $pass = $row["password"];
		 $date_today = $row["date_today"];
		 $position_title = $row["position_title"];
		 $email = $row["email"];
		 $date_of_birth = $row["date_of_birth"];
		 $id_card_number = $row["id_card_number"];
		 $phone_number = $row["phone_number"];
		 $country_code = $row["country_code"];
		 $gender = $row["gender"];
		 $county = $row["county"];
		 $country = $row["country"]; 
		 $address = $row["address"];
		
		
		
		echo "<td>";
		
		echo "<form action = 'updatestaff.php' method = 'post'>";
		
		echo "<img src='$imageURL' height = '200' width = '200' class='responsive'>";
		echo "<br>";
		
		echo "User Id:<input type=text name='id' value='$id' class='formcell'  />";
		echo "<br>";
		
		echo "Username:<input type=text name='username' value='$user' class='formcell'  />";
		echo "<br>";
		
		echo "Position Title:<input type=text name='position_title' value='$position_title' class='formcell'  />";
		echo "<br>";
		
		echo "First Name:<input type=text name='first_name' value='$first_name' class='formcell'  />";
		echo "<br>";
		
		echo "Second Name:<input type=text name='second_name' value='$second_name' class='formcell'  />";
		echo "<br>";
		
		echo "Last Name:<input type=text name='last_name' value='$last_name' class='formcell'  />";
		echo "<br>";
		
		echo "Password:<input type=text name='password' value='$pass' class='formcell'  />";
		echo "<br>";
		
		echo "Registration Date:<input type=text name='date_today' value='$date_today' class='formcell'  />";
		echo "<br>";
		
		echo "Email:<input type=text name='email' value='$email' class='formcell'  />";
		echo "<br>";
		
		echo "Date of Birth:<input type=text name='date_of_birth' value='$date_of_birth' class='formcell'  />";
		echo "<br>";
		
		
		echo "ID Card Number:<input type=text name='id_card_number' value='$id_card_number' class='formcell'  />";
		echo "<br>";
		
		echo "Phone Number:<input type=text name='phone_number' value='$phone_number' class='formcell'  />";
		echo "<br>";
		
		echo "Country Code:<input type=text name='country_code' value='$country_code' class='formcell'  />";
		echo "<br>";
		
		echo "Gender:<input type=text name='gender' value='$gender' class='formcell'  />";
		echo "<br>";
		
		echo "County:<input type=text name='county' value='$county' class='formcell'  />";
		echo "<br>";
		
		echo "Country:<input type=text name='country' value='$country' class='formcell'  />";
		echo "<br>";
		
		
		echo "Address:<input type=text name='address' value='$address' class='formcell'  />";
		echo "<br>";
		
		echo "<input type = 'submit' class = 'staff_profile_button' value = 'Update' name = 'update_inventory'></input>";
		echo "</form>";
		
		echo "</td>";
		
		echo "</table";
		
		$staffcounter = $staffcounter + 1;
		if ($staffcounter%4 == 0){
			echo "<br>";
		}
        	
		
    }
	
} else {
    echo "0 results";
}

$conn->close();

?>
					  
                     </td>								 
                 </tr>
				
             </table>
			 </center>
			</div>
		   </td>
			
         </tr>		
        </table> 
    </div>

</body> 
</html> 