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
			<h2 class = "body_sec1_table_headers">My Orders </h2>
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

if (isset($_SESSION['username'])) {
        /// your code here
    
$user = $_SESSION['username']; 

	
$sql = "SELECT * FROM orders WHERE  username LIKE '%".$user."%'";
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
		 $age = $row["age"];
		 $phone_number = $row["phone_number"];
		 $gender = $row["gender"];
		 $country = $row["country"];
		 $address = $row["address"];
		
		
		echo "<tr>";
		echo "<td>";
		
		echo "<p class = 'userinfo'>Name: $first_name $last_name";
		echo "<br>";
		
		echo "Username: $username1";
		echo "<br>";
		
		echo "Email: $email";
		echo "<br>";
		
		echo "Age: $age";
		echo "<br>";
		
		echo "Phone Number: $phone_number";
		echo "<br>";
		
		echo "Gender: $gender";
		echo "<br>";
		
		echo "Country: $country";
		echo "<br>";
		
		echo "Address: $address</p>";
		echo "<br>";
		echo "<br>";
		
		
		echo "</td>";
		
		echo "<td>";
		echo "Send the TOTAL amount then click PAID.";
		echo "<br>";
		echo "<img src='images/logos/1.png' height = '80' width = '150' class=''/>";
		
		echo "<p class = 'mpesatext'>PAY WITH M-PESA</p>";
		
		echo "<p class = 'mpesatext'>Buy Goods Number: 281928</p>";
		
		echo "Products will be delivered within 7 days after ordering.";
		echo "<br>";
		echo "For any Inquiries Call Us on +254 712190029.</br>We value your Feedback.";
		echo "<br>";
		
		echo "</td>";
		
		echo "</tr>";
		
		echo "</table";
		
		
    }
	
} else {
    echo "0 results";
}


   
   
   
   
$counter = 0;


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		
		echo "<table>";
		
		 $orderid = $row["orderid"];
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
		 $payment_status = $row["payment_status"];
		 $received = $row["received"];
		
		echo "<td>";
		
		
		echo "<form action = 'cartselectors.php' method = 'post'>";
		
		
		echo "Brand:<input type=text name='brand' value='$brand' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Description:<input type=text name='description' value='$description' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Category:<input type=text name='category' value='$category' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Price:<input type=number name='price' value='$price' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "How many watches:<input type=number name='selectedno' value='$amount' class='formcell' readonly/>";
		echo "<br>";
		
		echo "Strap:<input type=text name='strap' value='$strap' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Colour:<input type=text name='color' value='$color' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "TOTAL: Ksh<input type=number name='total' value='$total' class='formcell' readonly/>";
		echo "<br>";
		
		echo "PAYMENT STATUS:<input type=text name='payment_status' value='$payment_status' class='formcell' readonly/>";
		echo "<br>";
		
		echo "DELIVERED:<input type=text name='received' value='$received' class='formcell' readonly/>";
		echo "<br>";
		
		echo "<input type=text name='username' value='$user' class='formcell'  hidden/>";
		echo "<input type=text name='orderid' value='$orderid' class='formcell'  hidden/>";
		
		echo "<input type=number name='color' value='$watch_id' class='formcell'  hidden/>";
		
		if($payment_status == "Approved"){
			
			echo "<p class = 'ordertext'>Payment Confirmed!</br>Your order will be delivered.</p>";
		}
		else if($payment_status == "Pending"){
			
			echo "<p class = 'ordertext'>Pay & Wait for Confirmation.</p>";
			echo "<input type = 'submit' class = 'staff_profile_button' value = 'PAID' name = 'action'></input>";
		    echo "<input type = 'submit' class = 'staff_profile_button2' value = 'REMOVE ORDER' name = 'action'></input>";
		}
		else if($payment_status == "Declined"){
			echo "<p class = 'ordertext'>You have not paid.</br>Send TOTAL amount to Buy Goods number.</p>";
		}
		
		echo "</form>";
		
		echo "</td>";
		
		echo "</table";
		
		$counter = $counter + 1;
		if ($counter%4 == 0){
			echo "<br>";
		}
    
    $orderid = "$orderid";
	$payment_status = "$payment_status";
	$_SESSION['$orderid']=$orderid;
	$_SESSION['$payment_status']=$payment_status;
   
         		
    }
	
} else {
    echo "0 results";
}
}
else{
	 echo "<a href = 'signup.php'>Sign Up</a> to view orders";
	 echo"<br>";
	 echo"<br>";
	 echo "<a href = 'login.php'>Login</a> to view orders";	
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