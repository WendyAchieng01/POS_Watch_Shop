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
    
<title>All Watches |</title> 
	
<link rel = "stylesheet" type = "text/css" href = "css/style.css">

<script type = "text/JavaScript">   
 
</script> 

</head> 
  
<body> 
      
   
      
    <!-- Body section -->
    <div class = "body_sec1"> 
	   <h3 class = "body_sec1_header">All Watches</h3>
        <table class ="body_sec1_table">
		 <tr>
		   <td>
		      <a href = "inventory.php"><input type = 'button' class = 'staff_profile_button' value = 'Go Back' name = "back"></input></a>
		   </td>
		 </tr>
         <tr>
		 
            <th>
			<h2 class = "body_sec1_table_headers">All Watches</h2>
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
	
$sql = "SELECT * FROM watches ORDER BY brand";
$result = $conn->query($sql);
$counter = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<table>";
		
		
		 $watchid = $row["watch_id"];
		 $imageURL = 'uploads/watchimages/'.$row["watch_image"];
		 $brand = $row["brand"];
		 $description = $row["description"];
		 $category = $row["category"];
		 $price = $row["price"];
		 $amount = $row["amount"];
		 $strap = $row["strap"];
		 $color = $row["color"];
		
		
		
		echo "<td>";
		echo "<form action = 'updateinventory.php' method = 'post'>";
		
		echo "<img src='$imageURL' height = '200' width = '200' class=''>";
		echo "<br>";
		
		echo "Brand:<input type=text name='brand' value='$brand' class='formcell2'  />";
		echo "<br>";
		
		echo "Description:<input type=text name='description' value='$description' class='formcell2'  />";
		echo "<br>";
		
		echo "Category:<input type=text name='category' value='$category' class='formcell2'  />";
		echo "<br>";
		
		echo "Price:<input type=number name='price' value='$price' class='formcell2'  />";
		echo "<br>";
		
		echo "Watch Stock:<input type=number name='amount' value='$amount' class='formcell2'  />";
		echo "<br>";
		
		echo "Strap:<input type=text name='strap' value='$strap' class='formcell2'  />";
		echo "<br>";
		
		echo "Colour:<input type=text name='color' value='$color' class='formcell2'  />";
		echo "<br>";

		echo "<input type=text name='watchid' value='$watchid' class='formcell2'  hidden/>";
		
		echo "<input type = 'submit' class = 'staff_profile_button' value = 'Update' name = 'update_inventory'></input>";
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