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
    
<title>All Users |</title> 
	
<link rel = "stylesheet" type = "text/css" href = "css/style.css">

<script type = "text/JavaScript">   
 
</script> 

</head> 
  
<body> 
      
   
      
    <!-- Body section -->
    <div class = "body_sec1"> 
	   <h3 class = "body_sec1_header">All Users</h3>
        <table class ="body_sec1_table">
		<tr>
		   <td>
		      <a href = "totalusers.php"><input type = 'button' class = 'staff_profile_button' value = 'Go Back' name = "back"></input></a>
		   </td>
		 </tr>
         <tr>
		 
            <th>
			<h2 class = "body_sec1_table_headers">All Users</h2>
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
	
echo "<table>";
echo "<tr>";
echo "<td>";

echo "Order By:";
echo "<form action = 'userprofile.php' method = 'post'>";

echo "<select class='signup_table_input2'  name='search_user' type = 'text'>";
echo "<option></option>";
echo "<option value='Username' >Username</option>";
echo "<option value='first_name' >First Name</option>";
echo "<option value='second_name' >Second Name</option>";
echo "<option value='last_name' >Last Name</option>";
echo "<option value='id' >User Id</option>";
echo "<option value='date_today' >Registration Date</option>";
echo "<option value='email' >Email</option>";
echo "<option value='date_of_birth' >Date of Birth</option>";
echo "<option value='id_card_number' >ID Card No</option>";
echo "<option value='phone_number' >Phone Number</option>";
echo "<option value='country_code' >Country Code</option>";
echo "<option value='gender' >Gender</option>";
echo "<option value='county' >County</option>";
echo "<option value='country' >Country</option>";
echo "</select>";

echo "<input type = 'submit' class = 'staff_profile_button' value = 'Go' name = 'order_by'></input>";

echo "</form>";

echo "</td>";
echo "</tr>";
echo "</table>";	
	
	
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$counter = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<table>";
		
		
		
		 $imageURL = 'uploads/idimages/'.$row["id_image"];
		 $id = $row["id"];
		 $first_name = $row["first_name"];
		 $second_name = $row["second_name"];
		 $last_name = $row["last_name"];
		 $user = $row["username"];
		 $pass = $row["password"];
		 $date_today = $row["date_today"];
		 $email = $row["email"];
		 $age = $row["age"];
		 $date_of_birth = $row["date_of_birth"];
		 $id_card_number = $row["id_card_number"];
		 $phone_number = $row["phone_number"];
		 $country_code = $row["country_code"];
		 $gender = $row["gender"];
		 $county = $row["county"];
		 $country = $row["country"]; 
		 $address = $row["address"];
		
		
		
		echo "<td>";
		
		echo "<form action = 'updateuser.php' method = 'post'>";
		
		echo "<img src='$imageURL' height = '200' width = '200' class='responsive'>";
		echo "<br>";
		
		echo "User Id:<input type=text name='id' value='$id' class='formcell2'  />";
		echo "<br>";
		
		echo "Username:<input type=text name='username' value='$user' class='formcell2'  />";
		echo "<br>";
		
		
		echo "First Name:<input type=text name='first_name' value='$first_name' class='formcell2'  />";
		echo "<br>";
		
		echo "Second Name:<input type=text name='second_name' value='$second_name' class='formcell2'  />";
		echo "<br>";
		
		echo "Last Name:<input type=text name='last_name' value='$last_name' class='formcell2'  />";
		echo "<br>";
		
		echo "Password:<input type=text name='password' value='$pass' class='formcell2'  />";
		echo "<br>";
		
		echo "Registration Date:<input type=text name='date_today' value='$date_today' class='formcell2'  />";
		echo "<br>";
		
		echo "Email:<input type=text name='email' value='$email' class='formcell2'  />";
		echo "<br>";
		
		echo "Age:<input type=number name='age' value='$age' class='formcell2'  />";
		echo "<br>";
		
		echo "Date of Birth:<input type=text name='date_of_birth' value='$date_of_birth' class='formcell2'  />";
		echo "<br>";
		
		
		echo "ID Card Number:<input type=text name='id_card_number' value='$id_card_number' class='formcell2'  />";
		echo "<br>";
		
		echo "Phone Number:<input type=text name='phone_number' value='$phone_number' class='formcell2'  />";
		echo "<br>";
		
		echo "Country Code:<input type=text name='country_code' value='$country_code' class='formcell2'  />";
		echo "<br>";
		
		echo "Gender:<input type=text name='gender' value='$gender' class='formcell2'  />";
		echo "<br>";
		
		echo "County:<input type=text name='county' value='$county' class='formcell2'  />";
		echo "<br>";
		
		echo "Country:<input type=text name='country' value='$country' class='formcell2'  />";
		echo "<br>";
		
		
		echo "Address:<input type=text name='address' value='$address' class='formcell2'  />";
		echo "<br>";
		
		echo "<input type = 'submit' class = 'staff_profile_button' value = 'Update' name = 'update_inventory'></input>";
		echo "</form>";
		
		echo "</td>";
		
		echo "</table";
		
		$counter = $counter + 1;
		if ($counter%3 == 0){
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