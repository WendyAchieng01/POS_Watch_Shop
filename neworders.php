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
    
<title>New Orders |</title> 
	
<link rel = "stylesheet" type = "text/css" href = "css/style.css">

<script type = "text/JavaScript">   
 
</script> 

</head> 
  
<body> 
      
   
      
    <!-- Body section -->
    <div class = "body_sec1"> 
	   <h3 class = "body_sec1_header">New Orders</h3>
        <table class ="body_sec1_table">
		 <tr>
		    <td>
			  <a href = 'adminorders.php'><input type = 'submit' class = 'staff_profile_button' value = 'Go Back'></input></a>
			</td>
		 </tr>
         <tr>
		 
            <th>
			<h2 class = "body_sec1_table_headers"><?php include("totalneworders.php");?>  New Orders</h2>
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
	
$sql = "SELECT * FROM orders WHERE payment_status LIKE 'Pending'";
$result = $conn->query($sql);
$counter = 0;

	

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<table>";
		
		
		 $adminorderid = $row["adminorderid"];
		 $watch_id = $row["watch_id"];
		 $user = $row["username"];
		 $brand = $row["brand"];
		 $description = $row["description"];
		 $category = $row["category"];
		 $price = $row["price"];
		 $amount = $row["amount"];
		 $strap = $row["strap"];
		 $color = $row["color"];
		 $total = $row["total"];
		 $payment_status = $row["payment_status"];
		 $received = $row["received"];
		
		
		echo "<td>";
		
		echo "<form action = 'updateorder.php' method = 'post'>";
		
		echo "Order ID: <input type=text name='order_id' value='$adminorderid' class='formcell2' readonly/>";
		echo "<br>";
		
		echo "Username: <input type=text name='username' value='$user' class='formcell2' readonly/>";
		echo "<br>";
		
		echo "Brand:<input type=text name='brand' value='$brand' class='formcell2'  readonly/>";
		echo "<br>";
		
		echo "Description:<input type=text name='description' value='$description' class='formcell2'  readonly/>";
		echo "<br>";
		
		echo "Category:<input type=text name='category' value='$category' class='formcell2'  readonly/>";
		echo "<br>";
		
		echo "Price:<input type=number name='price' value='$price' class='formcell2'  readonly/>";
		echo "<br>";
		
		echo "How many watches:<input type=number name='selectedno' value='$amount' class='formcell2'  readonly/>";
		echo "<br>";
		
		echo "Strap:<input type=text name='strap' value='$strap' class='formcell2'  readonly/>";
		echo "<br>";
		
		echo "Colour:<input type=text name='color' value='$color' class='formcell2'  readonly/>";
		echo "<br>";
		
		echo "TOTAL: <input type=number name='total' value='$total' class='formcell2' readonly/>";
		echo "<br>";
		
		echo "PAYMENT STATUS: <input type=text name='payment_status' value='$payment_status' class='formcell2' />";
		echo "<br>";
		
		echo "RECEIVED: <input type=text name='received' value='$received' class='formcell2'/>";
		echo "<br>";
		
		echo "<input type=text name='adminorderid' value='$adminorderid' class='formcell2' hidden/>";
		echo "<input type=number name='watch_id' value='$watch_id' class='formcell2' hidden/>";
		
		echo "<input type = 'submit' class = 'staff_profile_button' value = 'Update Order' name = 'update_order'></input>";
		echo "</form>";
		
		echo "</td>";
		
		echo "</table";
		
		$counter = $counter + 1;
		if ($counter%4 == 0){
			echo "<br>";
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