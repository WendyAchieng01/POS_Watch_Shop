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
    
<title>New Contact Requests |</title> 
	
<link rel = "stylesheet" type = "text/css" href = "css/style.css">

<script type = "text/JavaScript">   
 
</script> 

</head> 
  
<body> 
      
   
      
    <!-- Body section -->
    <div class = "body_sec1"> 
	   <h3 class = "body_sec1_header">New Contact Requests</h3>
        <table class ="body_sec1_table">
		  <tr>
		    <td>
			  <a href = 'contactrequests.php'><input type = 'submit' class = 'staff_profile_button' value = 'Go Back'></input></a>
			</td>
		 </tr>
		 
            <th>
			<h2 class = "body_sec1_table_headers"><?php include("totalnewcon.php");?> New Contact Requests</h2>
			</th>
			
         </tr>
         
         <tr>
            <td>
			<div>
			 <center>
<?php
// Connects to your Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WATCHSHOP";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
	
//All Specialists


$sql = "SELECT * FROM contacts WHERE request_status LIKE 'Pending' ORDER BY id";	
$result = $conn->query($sql);
$counter = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<table>";
		
		
		 $contact_id = $row["id"];
		 $first_name = $row["first_name"];
		 $second_name = $row["second_name"];
		 $last_name = $row["last_name"];
		 $date_today = $row["date_today"];
		 $email = $row["email"];
		 $phone_number = $row["phone_number"];
		 $country_code = $row["country_code"];
		 $message = $row["message"];
		 $request_status = $row["request_status"];
		 
		 
		
		
		echo "<td>";
		echo "<form action = 'updateconrequest.php' method = 'post'>";
		
		
		echo "Contact Request Number:<input type=number name='contact_id' value='$contact_id' class='formcell2'  readonly/>";
		echo "<br>";
		
		echo "First Name:<input type=text name='first_name' value='$first_name' class='formcell2'  readonly/>";
		echo "<br>";
		
		echo "Second Name:<input type=text name='second_name' value='$second_name' class='formcell2'  readonly/>";
		echo "<br>";
		
		echo "Last Name:<input type=text name='last_name' value='$last_name' class='formcell2'  readonly/>";
		echo "<br>";
		
		echo "Contact Date:<input type=text name='date_today' value='$date_today' class='formcell2'  readonly/>";
		echo "<br>";
		
		echo "Email:<input type=email name='email' value='$email' class='formcell2'  readonly/>";
		echo "<br>";
		
		echo "Phone Number:<input type=text name='phone_number' value='$phone_number' class='formcell2'  readonly/>";
		echo "<br>";
		
		echo "Country Code:<input type=text name='country_code' value='$country_code' class='formcell2'  readonly/>";
		echo "<br>";
		
		echo "Message:<input type=text name='message' value='$message' class='formcell3'  readonly/>";
		echo "<br>";
		
		echo "Request Status:<input type=text name='request_status' value='$request_status' class='formcell2'  />";
		echo "<br>";
		
		
		echo "<input type = 'submit' class = 'staff_profile_button' value = 'Update' name = 'update'></input>";
		
		
		echo "</form>";
		
		echo "</td>";
		
		echo "</table";
		
		$counter = $counter + 1;
		if ($counter%3 == 0){
			echo "<br>";
		} 
    }
	
} 
else {
    echo "0 Results";
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