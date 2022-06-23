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
 
<title>Order Profile |</title>
 
<link rel = "stylesheet" type = "text/css" href = "css/style.css">

<script type = "text/JavaScript">   

</script> 
 
</head> 
  
<body> 
      
    <!-- Header Section -->
	<div class = "header_section">
    <header> 
        <div class="head1">Modern Watch Shop</div> 
        <div class="head2">Where Style Meets Quality</div> 
    </header> 
     </div> 
	 
    <!-- Menu Navigation Bar -->
    <nav>
    <table class = "menu_table">
     <tr>
	   <td class = "menu_column">
	     <a href = "adminhome.php" class = "menu_link">Home</a>
	   </td>
	   <td class = "menu_column">
	     <a href = "home.php" class = "menu_link">Visit Site</a>
	   </td>
	   <td class = "menu_column_dropdown">
	     <a href = "inventory.php" class = "menu_link">Inventory</a>
	   </td>
	   <td class = "menu_column">
	     <a href = "viewstaff.php" class = "menu_link">View Staff</a>
	   </td>
	   <td class = "menu_column_search">
	    <form action = "search.php" method = "post">
		<input class = "search" type="search" name="search_watch"> 
		<input class = "search_btn" type = "submit" name = "search_button" value = "Search" />
		</form>	
	   </td>
	   <td class = "menu_column_log">
	     <?php include "menulog.php";?>
	   </td>
	 </tr>
   </table>
  </nav> 
      
    <!-- Body section -->
    <div class = "body_sec1"> 
	   <h3 class = "body_sec1_header">Order Profile</h3>
        <table class ="body_sec1_table">
         <tr>
		 
            <th>
			<h2 class = "body_sec1_table_headers">Order Profile</h2>
			</th>
			
         </tr>
         
         <tr>
           <td>
			<div>
			 <center>
			 <table class = "adminhome_table" > 
			  	
              	 <tr>			
                     <td>				
                      <h2 class = "adminhome_table_headers">Order Profile</h2>			
                     </td>								 
                 </tr>	
                  <tr>
                     <td>				
                      <p class = "adminhome_table_paragraphs">
                       <a href = "adminorders.php"><input type = 'button' class = 'staff_profile_button' value = 'Go Back' name = 'btn'></input></a>					  
					  </p>		
                     </td>								
                 </tr>					 
                  <tr>
                     <td>				
                      <p class = "adminhome_table_paragraphs">
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

echo "<table>";
echo "<tr>";
echo "<td>";

echo "Order By:";
echo "<form action = 'orderprofile2.php' method = 'post'>";

echo "<select class='signup_table_input2'  name='search_order' type = 'text'>";
echo "<option></option>";
echo "<option value='Username' >Username</option>";
echo "<option value='Id' >Order ID</option>";
echo "<option value='Brand' >Brand</option>";
echo "<option value='Description' >Description</option>";
echo "<option value='Category' >Category</option>";
echo "<option value='Price' >Price</option>";
echo "<option value='Amount' >Amount</option>";
echo "<option value='Strap' >Strap</option>";
echo "<option value='Color' >Color</option>";
echo "<option value='Date' >Order Date</option>";
echo "<option value='Total' >Total</option>";
echo "<option value='Payment_Status' >Payment Status</option>";
echo "<option value='Received' >Received</option>";
echo "</select>";

echo "<input type = 'submit' class = 'staff_profile_button' value = 'Go' name = 'order_by'></input>";

echo "</form>";

echo "</td>";
echo "</tr>";
echo "</table>";

echo "<p class = formcell2>$search_order1</p>";	

$sql = "SELECT * FROM orders ORDER BY $search_order1";
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
		
		echo "Order ID: <input type=text name='order_id' value='$adminorderid' class='formcell' readonly/>";
		echo "<br>";
		
		echo "Username: <input type=text name='username' value='$user' class='formcell' readonly/>";
		echo "<br>";
		
		echo "Brand:<input type=text name='brand' value='$brand' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Description:<input type=text name='description' value='$description' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Category:<input type=text name='category' value='$category' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Price:<input type=number name='price' value='$price' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "How many watches:<input type=number name='selectedno' value='$amount' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Strap:<input type=text name='strap' value='$strap' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Colour:<input type=text name='color' value='$color' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Order Date:<input type=text name='date' value='$date' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "TOTAL: <input type=number name='total' value='$total' class='formcell' readonly/>";
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
					  </p>		
                     </td>								
                 </tr>
             </table>
			 </center>
			</div>
		   </td>
			
         </tr>		
        </table> 
    </div>
	
	<div class = "body_sec2">
    <table class = "body_sec2_table" border = "0">
         <tr>
            <th><a href = "totalusers.php" class = "body_sec2_table_headers2">Users</a></th>
			<th><a href = "adminorders.php" class = "body_sec2_table_headers2">Orders</a></th>
			<th><a href = "viewstaff.php" class = "body_sec2_table_headers2">Staff</a></th>
			<th><a href = "contactrequests.php" class = "body_sec2_table_headers2">Contact Requests</a></th>
			
         </tr>
         
         <tr>
            <td class = "body_sec2_table_paragraph2">
			<p>
			<?php include "totalusers2.php";?> Users
			</p>
			<a href="totalusers.php" class = "read_more">View more...</a>
			</td>
			<td class = "body_sec2_table_paragraph2">
			<p>
			<?php include "totalorders.php";?> Orders
			</p>
			<a href="adminorders.php" class = "read_more">View more...</a>
			</td>
			<td class = "body_sec2_table_paragraph2">
			<p>
			<?php include "totalstaff.php"; ?> Members
			</p>
			<a href="viewstaff.php" class = "read_more">View more...</a>
			</td>
			<td class = "body_sec2_table_paragraph2">
			<p>
			<?php include "totalcontactrequests.php"; ?> Requests
			</p>
			<a href="contactrequests.php" class = "read_more">View more...</a>
			</td>
         </tr>
      </table>	
	  </div>
      
    <!-- Footer Section -->
    <footer>
      <table class = "footer_table" border = "0">
         <tr>
            <th class = "footer_table_headers">Address</th>
            <th class = "footer_table_headers">Contact</th>
			<th class = "footer_table_headers">Working Hours</th>
         </tr>
         
         <tr>
            <td><p>Location: Westlands</p></td>
            <td><p>Phone Number: +254 712190029</p></td>
			<td><p>Weekdays: 8.00am - 5.00pm</p></td>
         </tr>
		 <tr>
            <td><p>City: Nairobi, Kenya</p></td>
            <td><p>Email: modernwatchshop@gmail.com</p></td>
			<td><p>Weekends: 8.00am - 12.00pm</p></td>
         </tr>
      </table>
	  <table class = "copyright_table">
	  <tr>
            <td>Copyright©2021 Wendy Achieng, Inc. All rights reserved</td>
			<td><a href = "policy.php" class = "privacy_policy"> Privacy Policy & Terms of Use</a></td>
      </tr>
	  </table>
	</footer> 
</body> 
</html> 