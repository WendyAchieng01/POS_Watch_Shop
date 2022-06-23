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
 
<title>Search Request |</title>
 
<link rel = "stylesheet" type = "text/css" href = "css/style.css">

<script type = "text/JavaScript">   

</script> 
 
</head> 
  
<body> 
      
    
      
    <!-- Body section -->
    <div class = "body_sec1"> 
	   <h3 class = "body_sec1_header">Search Request</h3>
        <table class ="body_sec1_table">
		 <tr>
		    <td>
			  <a href = 'requests.php'><input type = 'submit' class = 'staff_profile_button' value = 'Go Back'></input></a>
			</td>
		 </tr>
         <tr>
		 
            <th>
			<h2 class = "body_sec1_table_headers">Search Request</h2>
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

$search_request=$_POST['search_request'];
$search_request1=mysqli_real_escape_string($conn,$search_request);
	
$sql = "SELECT * FROM requests WHERE  email LIKE '%".$search_request1."%'OR request LIKE '%".$search_request1."%' OR username LIKE '%".$search_request1."%'OR request_status LIKE '%".$search_request1."%' ORDER BY id ";
$result = $conn->query($sql);

$counter = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<table>";
		
		
		 $request_id = $row["id"];
		 $username = $row["username"];
		 $email = $row["email"];
		 $request = $row["request"];
		 $request_status = $row["request_status"];
		 
		
		echo "<td>";
		echo "<form action = 'updaterequests.php' method = 'post'>";
		
		
		echo "Request Number:<input type=number name='request_id' value='$request_id' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Username:<input type=text name='username' value='$username' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Email:<input type=text name='email' value='$email' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Request:<input type=text name='request' value='$request' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Request Status:<input type=text name='request_status' value='$request_status' class='formcell'  />";
		echo "<br>";
		
		
		
		echo "<input type = 'submit' class = 'staff_profile_button' value = 'Update' name = 'action'></input>";
		
		
		
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