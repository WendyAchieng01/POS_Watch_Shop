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

<title>Home |</title> 

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
	     <a href = "home.php" class = "menu_link">Home</a>
	   </td>
	   <td class = "menu_column">
	     <a href = "about.php" class = "menu_link">About</a>
	   </td>
	   <td class = "menu_column_dropdown">
	     <a href = "men.php" class = "menu_link">Men's</a>
	   </td>
	   <td class = "menu_column">
	     <a href = "women.php" class = "menu_link">Women's</a>
	   </td>
	   <td class = "menu_column">
	     <a href = "kids.php" class = "menu_link">Kid's</a>
	   </td>
	   <td class = "menu_column">
	     <a href = "staff.php" class = "menu_link">Staff</a>
	   </td>
	   <td class = "menu_column">
	     <a href = "orders.php" class = "menu_link">Orders</a>
	   </td>
	   <td class = "menu_column">
	     <a href = "contact.php" class = "menu_link">Contact</a>
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
	   <h3 class = "body_sec1_header">Home</h3>
        <table class ="body_sec1_table">
         <tr>
            <th>
			<h2 class = "body_sec1_table_headers_left">Welcome to Modern Watch Shop</h2>
			</th>
			<th>
			 <h2 class = "body_sec1_table_headers_main">Check out our Watch Shop</h2>
			</th>
			<th>
			<h2 class = "body_sec1_table_headers">View our <a href = "rarecollection.php" class = "checkup_link">Rare Collection</a></h2>
			</th>
         </tr>
         
         <tr>
            <td>
			 <img src = "images/logos/1.jpg" class="responsive"/>
			</td>
			
            <td>
			<form>
            <a href = "loginchecker.php" ><input class = "appointment_btn" type = "button" value = "Go to Watch Shop"/></a>
            </form>
			</td>
			
			<td>
			 <img src = "images/homepage/2.jpg" class="responsive"/>
			</td>
         </tr>		
        </table> 
    </div>
	
	<div class = "body_sec2">
    <table class = "body_sec2_table" border = "0">
         <tr>
            <th><a href = "offers.php" class = "body_sec2_table_headers">Offers!</a></th>
            <th><a href = "newarrivals.php" class = "body_sec2_table_headers">New Arrivals</a></th>
			<th><a href = "rarecollection.php" class = "body_sec2_table_headers">Rare Collection</a></th>
			<th><a href = "watchtypes.php" class = "body_sec2_table_headers">Watch Types</a></th>
         </tr>
         <tr>
            <td class = "body_sec2_table_paragraph">
			<p><a href = "offers.php"><img src = "images/watches/1.jpg" class="responsive"/></a> 
			</p>
			<a href="offers.php" class = "read_more">View more...</a>
			</td>
            <td class = "body_sec2_table_paragraph">
			<p>
			<a href = "newarrivals.php"><img src = "images/watches/6.jpg" class="responsive"/></a> 
			</p>
			<a href="newarrivals.php" class = "read_more">View more...</a>
			</td>
			<td class = "body_sec2_table_paragraph">
			<p>
			<a href = "rarecollection.php"><img src = "images/watches/4.jpg" class="responsive"/></a>
			</p>
			<a href="rarecollection.php" class = "read_more">View more...</a>
			</td>
			<td class = "body_sec2_table_paragraph">
			<p>
			<a href = "watchtypes.php"><img src = "images/watches/8.jpg" class="responsive"/></a>
			</p>
			<a href="watchtypes.php" class = "read_more">View more...</a>
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