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
 
<title>Tester |</title>
 
<link rel = "stylesheet" type = "text/css" href = "css/style.css">

<script type = "text/JavaScript">   

</script> 
 
</head> 
  
<body> 
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



$watchid = "1";

$sql1 = "SELECT amount FROM watches WHERE id= '".$watchid."'";
$result = $conn->query($sql1);

$counter = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<table>";
		 
		 $stockamount = $row["amount"];
		
		echo "<td>";
		
		
		echo "<br>";
		
		echo "Stock Amount:<input type=number name='amount' value='$stockamount' class='formcell'  readonly/>";
		echo "<br>";
		
		
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
$stockamount = $stockamount - 1;

echo "$stockamount";


$sql = "UPDATE watches SET amount= '".$stockamount."' WHERE id= '".$watchid."'";
   
if (mysqli_query($conn, $sql)) {
   echo "updated";
   
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>  
    
</body> 
</html> 