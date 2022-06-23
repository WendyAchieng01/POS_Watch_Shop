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
	   <h3 class = "body_sec1_header">Search Order</h3>
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

$search_order=$_POST['search_order'];
$search_order1=mysqli_real_escape_string($conn,$search_order);
	
$sql = "SELECT * FROM orders WHERE  username LIKE '%".$search_order1."%' OR brand LIKE '%".$search_order1."%'OR description LIKE '%".$search_order1."%'OR category LIKE '%".$search_order1."%'OR price = '".$search_order1."' OR amount LIKE '%".$search_order1."%'OR strap LIKE '%".$search_order1."%'OR color LIKE '%".$search_order1."%'";
$result = $conn->query($sql);

$counter = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<table>";
		
		
		 $adminorderid = $row["id"];
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
		 $date = $row["date"];
		
		
		
		echo "<td>";
		
		echo "<form action = 'updateorder.php' method = 'post'>";
		
		echo "Order ID: <input type=text name='order_id' value='$adminorderid' class='formcell' />";
		echo "<br>";
		
		echo "Username: <input type=text name='username' value='$user' class='formcell' />";
		echo "<br>";
		
		echo "Brand:<input type=text name='brand' value='$brand' class='formcell'  />";
		echo "<br>";
		
		echo "Description:<input type=text name='description' value='$description' class='formcell'  />";
		echo "<br>";
		
		echo "Category:<input type=text name='category' value='$category' class='formcell'  />";
		echo "<br>";
		
		echo "Price:<input type=number name='price' value='$price' class='formcell'  />";
		echo "<br>";
		
		echo "How many watches:<input type=number name='selectedno' value='$amount' class='formcell'  />";
		echo "<br>";
		
		echo "Strap:<input type=text name='strap' value='$strap' class='formcell'  />";
		echo "<br>";
		
		echo "Colour:<input type=text name='color' value='$color' class='formcell'  />";
		echo "<br>";
		
		echo "Order Date:<input type=text name='date' value='$date' class='formcell'  />";
		echo "<br>";
		
		echo "TOTAL: <input type=number name='total' value='$total' class='formcell' />";
		echo "<br>";
		
		echo "PAYMENT STATUS: <input type=text name='payment_status' value='$payment_status' class='formcell' />";
		echo "<br>";
		
		echo "RECEIVED: <input type=text name='received' value='$received' class='formcell'/>";
		echo "<br>";
		
		echo "<input type=text name='adminorderid' value='$adminorderid' class='formcell' hidden/>";
		
		echo "<input type = 'submit' class = 'staff_profile_button' value = 'Update Order' name = 'update_order'></input>";
		echo "</form>";
		
		echo "</td>";
		
		echo "</table";
		
		$counter = $counter + 1;
		if ($counter%4 == 0){
			echo "<br>";
		} 
    }
	
}  else {
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