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
 
<title>Women's |</title>
 
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
			<h2 class = "body_sec1_table_headers">Display </h2>
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


$category = "Kids";	
$sql = "SELECT * FROM watches WHERE  category LIKE '%".$category."%'ORDER BY brand";
$result = $conn->query($sql);



$counter = 0;

$user = $_SESSION['username']; 

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<table>";
		
		
		
		 $imageURL = 'uploads/watchimages/'.$row["watch_image"];
		 $watch_id = $row["watch_id"];
		 $brand = $row["brand"];
		 $description = $row["description"];
		 $category = $row["category"];
		 $price = $row["price"];
		 $amount = $row["amount"];
		 $strap = $row["strap"];
		 $color = $row["color"];
		
		
		
		
		echo "<td>";
		
		echo "<img src='$imageURL' height = '200' width = '200' class=''/>";
		echo "<br>";
		
		echo "<form action = 'addtocart.php' method = 'post'>";
		
		echo "Brand:<input type=text name='brand' value='$brand' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Description:<input type=text name='description' value='$description' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Category:<input type=text name='category' value='$category' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Price:<input type=number name='price' value='$price' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "How many watches:<input type=number name='selectedno' placeholder='Select' class='formcell'  required/>";
		echo "<br>";
		
		echo "Strap:<input type=text name='strap' value='$strap' class='formcell'  readonly/>";
		echo "<br>";
		
		echo "Colour:<input type=text name='color' value='$color' class='formcell'  readonly/>";
		echo "<br>";
		
		
		echo "<input type=text name='username' value='$user' class='formcell'  hidden/>";
		echo "<input type=number name='watch_id' value='$watch_id' class='formcell'  hidden/>";
		
		
		echo "<input type = 'submit' class = 'staff_profile_button' value = 'ADD TO CART' name = 'add_to_cart'></input>";
		echo "</form>";
		
		echo "</td>";
		
		echo "</table";
		
		$counter = $counter + 1;
		if ($counter%4 == 0){
			echo "<br>";
			echo "<br>";
			echo "<br>";
		}
         		
    }
	
} else {
    echo "0 results";
}
}
else{
	 echo "<a href = 'signup.php'>Sign Up</a> to view shop";
	 echo"<br>";
	 echo"<br>";
	 echo "<a href = 'login.php'>Login</a> to view shop";	
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