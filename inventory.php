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
 
<title>Inventory |</title>
 
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
	   <h3 class = "body_sec1_header">Inventory</h3>
        <table class ="body_sec1_table">
         <tr>
		 
            <th>
			<h2 class = "body_sec1_table_headers">Inventory</h2>
			</th>
			
         </tr>
         
         <tr>
           <td>
			<div>
			 <center>
			 <table class = "viewstaff_table" > 
			  	
              	 <tr>			
                     <td>				
                      <h2 class = "viewstaff_table_headers">Inventory</h2>			
                     </td>								 
                 </tr>
				 
                 <tr>
				     <td>
                      <form action="inventory.php" method="post" >
                        <input class = "register_staff_button" type = "submit" name= "reg_new_watch" value = "Register New Watch"/>
                      </form>					   
					 </td>
                 </tr>				 
                  <tr>
				     <td>
                      <form action="inventory.php" method="post" >
                        <input class = "register_staff_button" type = "submit" name= "view_all_watches" value = "View All Watches"/>
                      </form>					   
					 </td>
					 <td> 			
                      <h3 class = "viewstaff_table_headers2">Total Watches: <?php include "totalwatches.php"; ?> </h3>			
                     </td>
                 </tr>
				 <td>
                      <form action="inventory.php" method="post" >
                        <input class = "search" type = "search" name= "search_watch" placeholder = "Search Watch" required = "required" />
						<input class = "search_btn" type = "submit" value = "Search" />
                      </form>					   
					 </td>
				 <tr>
				     <td>
	 <?php
        if(array_key_exists('reg_new_watch', $_POST)) { 
            button1(); 
        } 
        else if(array_key_exists('view_all_watches', $_POST)) { 
            button2(); 
        }
        else if(array_key_exists('search_watch', $_POST)) { 
            button4(); 
        }		
        function button1() { 
          include "watchsignup.php"; 
        } 
        function button2() { 
		
		 include "inventory2.php";
        }  
		function button4() { 
		
		 include "searchwatch.php";
        } 
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
	
	<div class = "body_sec2">
    <table class = "body_sec2_table" border = "0">
         <tr>
            <th><a href = "totalusers.php" class = "body_sec2_table_headers2">Users</a></th>
			<th><a href = "adminorders.php" class = "body_sec2_table_headers2">Orders</a></th>
			<th><a href = "viewstaff.php" class = "body_sec2_table_headers2">Staff</a></th>
			
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
            <td>Copyright??2021 Wendy Achieng, Inc. All rights reserved</td>
			
      </tr>
	  </table>
	</footer> 
</body> 
</html> 