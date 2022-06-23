<!DOCTYPE html> 
<html> 
<head>
<!-- Provide list of keywords -->
<meta name = "keywords" content = "C, C++, Java, PHP, Perl, Python">

<!-- Provide description of the page -->
<meta name = "description" content = "Modern Watch Shop">

<!-- Author information -->
<meta name = "author" content = "Wendy Achieng">

<!-- Page content type -->
<meta http-equiv = "content-type" content = "text/html; charset = UTF-8">

<!-- Tag to tell robots not to index the content of a page -->
<meta name = "robots" content = "noindex, nofollow">

<!-- Tag to fit page contents to all devices -->
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<title>Cart |</title>
 
<link rel = "stylesheet" type = "text/css" href = "css/style.css">

<script type = "text/JavaScript">   

</script> 
 
</head> 
  
<body> 
      
    
      
    <!-- Body section -->
    <div class = "body_sec1"> 
        <table class ="body_sec1_table">
         <tr>
		 
            <th>
			<h2 class = "body_sec1_table_headers">My Shopping Cart </h2>
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
// Connects to your Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WATCHSHOP";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

$user = $_SESSION['username']; 

	
$sql = "SELECT * FROM cart WHERE  username LIKE '%".$user."%'";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM users WHERE  username LIKE '%".$user."%'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
		
		echo "<table>";
		
		 $first_name = $row["first_name"];
		 $last_name = $row["last_name"];
		 $username1 = $row["username"];
		 $email = $row["email"];
		 $phone_number = $row["phone_number"];
		 $gender = $row["gender"];
		 $country = $row["country"];
		 $address = $row["address"];
		
		
		echo "<tr>";
		
		echo "Name: $first_name $last_name";
		echo "<br>";
		
		echo "Username: $username1";
		echo "<br>";
		
		echo "Email: $email";
		echo "<br>";
		
		echo "Phone Number: $phone_number";
		echo "<br>";
		
		echo "Gender: $gender";
		echo "<br>";
		
		echo "Country: $country";
		echo "<br>";
		
		echo "Address: $address";
		echo "<br>";
		
		
		echo "</tr>";
		
		
		
		echo "</table";
		echo "<br>";
		echo "<br>";
		
    }
	
} else {
    echo "0 results";
}


$payment_status = "Pending";
$received = "No";

 $date_array = getdate();
   
   $formated_date  = "";
   $formated_date .= $date_array['mday'] . "/";
   $formated_date .= $date_array['mon'] . "/";
   $formated_date .= $date_array['year'];
   
$counter = 0;


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<table>";
		
		
		 $cartid = $row["id"];
		 $watch_id = $row["watch_id"];
		 $username = $row["username"];
		 $brand = $row["brand"];
		 $description = $row["description"];
		 $category = $row["category"];
		 $price = $row["price"];
		 $amount = $row["amount"];
		 $strap = $row["strap"];
		 $color = $row["color"];
		 $total = $row["total"];
		
		
		
		
		echo "<tr>";
		
		
		
		echo "<form action = 'cartselectors.php' method = 'post'>";
		
		
		echo "Brand:<input type=text name='brand' value='$brand' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Description:<input type=text name='description' value='$description' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Category:<input type=text name='category' value='$category' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Price:<input type=number name='price' value='$price' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "How many watches:<input type=number name='selectedno' value='$amount' class='formcell' />";
		echo "<br>";
		
		echo "Strap:<input type=text name='strap' value='$strap' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Colour:<input type=text name='color' value='$color' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Order Date: <input type=text name='date' value='$formated_date' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "TOTAL: Ksh<input type=number name='total' value='$total' class='formcell' readonly/>";
		echo "<br>";
		
		echo "<input type=text name='username' value='$user' class='formcell'  hidden/>";
		echo "<input type=text name='cartid' value='$cartid' class='formcell'  hidden/>";
		echo "<input type=text name='payment_status' value='$payment_status' class='formcell'  hidden/>";
		echo "<input type=text name='received' value='$received' class='formcell'  hidden/>";
		echo "<input type=number name='watch_id' value='$watch_id' class='formcell'  hidden/>";
		
		
		echo "<input type = 'submit' class = 'staff_profile_button' value = 'MAKE ORDER' name = 'action'></input>";
		echo "<input type = 'submit' class = 'staff_profile_button2' value = 'REMOVE' name = 'action'></input>";
		echo "</form>";
		
		echo "</tr>";
		
		echo "</table";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		
		$counter = $counter + 1;
		if ($counter%4 == 0){
			echo "<br>";
		}
    
    $cartid = "$cartid";
	$_SESSION['$cartid']=$cartid;
   
         		
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