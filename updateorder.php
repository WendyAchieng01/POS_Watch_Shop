<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'WATCHSHOP';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully<br>';
   
  
$username=$_POST['username'];
$payment_status=$_POST['payment_status'];
$received=$_POST['received'];
$adminorderid=$_POST['adminorderid'];
$watch_id=$_POST['watch_id'];
$selectedno=$_POST['selectedno'];



$username1=mysqli_real_escape_string($conn,$username);
$payment_status1=mysqli_real_escape_string($conn,$payment_status);
$received1=mysqli_real_escape_string($conn,$received);
$adminorderid1=mysqli_real_escape_string($conn,$adminorderid);
$watch_id1=mysqli_real_escape_string($conn,$watch_id);
$selectedno1=mysqli_real_escape_string($conn,$selectedno);
     
   
$sql = "UPDATE orders SET payment_status= '".$payment_status1."',received= '".$received1."' WHERE username= '".$username1."' AND id='".$adminorderid1."'";
   
if (mysqli_query($conn, $sql)) {
    header ("location: adminorders.php");	
   
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql1 = "SELECT * FROM watches WHERE id= '".$watch_id1."'";
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

if ($payment_status=="Approved"){
$stockamount = $stockamount - $selectedno;


$sql2 = "UPDATE watches SET amount= '".$stockamount."'WHERE id= '".$watch_id1."'";
   
if (mysqli_query($conn, $sql2)) {
   echo "updated";
   
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
}
else if($payment_status== "Declined"){
	echo"";
}
else if($payment_status== "Pending"){
	echo"";
}



mysqli_close($conn);
?>