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
    
<title>Staff Sign Up |</title> 
	
<link rel = "stylesheet" type = "text/css" href = "css/style.css">

<script type = "text/JavaScript">   
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}  
</script> 

</head> 
  
<body> 
      
   
      
    <!-- Body section -->
    <div class = "body_sec1"> 
	   <h3 class = "body_sec1_header">Watch Registration</h3>
        <table class ="body_sec1_table">
         <tr>
		 
            <th>
			<h2 class = "body_sec1_table_headers">Register New Watch Form</h2>
			</th>
			
         </tr>
         
         <tr>
            <td>
			<div>
			 <center>
			  <table class = "signup_table"> 
			   <form action="watchsignup2.php" method="post" enctype="multipart/form-data">
                   <tr>
                     <td>				
                      <p class = "bold_instruction" >Fill the form below </p>			
                     </td>				 
                     <td>
			     </tr>
                 <tr>
                     <td>				
                      <p class = "bold_instruction" >Watch Details </p>			
                     </td>				 
                     <td>
			     </tr>				 
              	 <tr>			
                     <td class = "signup_table_headers">				
                       Brand			
                     </td>			
                     <td>				
                       <input class = "signup_table_input" type= "text" name= "brand" required = "required" placeholder = "Brand"/>			
                     </td>
                     <td class = "signup_table_headers">				
                       Description			
                     </td>			
                     <td>				
                       <input class = "signup_table_address_input" type= "text" name= "description" required = "required" placeholder = "Description"/>			
                     </td>
                     				 
                 </tr>
				 <tr>
				   <td class = "signup_table_headers">				
                       Category			
                     </td>			
                      <td>				
            <select class = "signup_table_input" type = "text" name="category"  >
			    <option value="Men">Men</option>
                <option value="Ladies">Women</option>
				<option value="Kids">Kids</option>
            </select>			
                     </td>	
				 </tr>
				 <tr>
				   <td class = "signup_table_headers">				
                       Price Ksh			
                     </td>			
                      <td>				
                        <input class = "signup_table_input" name="price" type = "number" required = "required" placeholder = "Price"/>
			   		
                     </td>	
				 </tr>
                 <tr>
				   <td class = "signup_table_headers">				
                       Stock			
                     </td>			
                      <td>				
                        <input class = "signup_table_input" name="amount" type = "number" required = "required" placeholder = "Stock"/>
			   		
                     </td>	
				 </tr>
                 <tr>
				   <td class = "signup_table_headers">				
                       Strap			
                     </td>			
                      <td>				
            <select class = "signup_table_input" type = "text" name="strap"  >
			    <option value="Leather">Leather</option>
                <option value="Plastic">Plastic</option>
				<option value="Gold">Gold</option>
				<option value="Silver">Silver</option>
				<option value="Steel">Steel</option>
            </select>
			   		
                     </td>	
				 </tr>
                 <tr>
				   <td class = "signup_table_headers">				
                       Color			
                     </td>			
                      <td>				
                        <input class = "signup_table_input" name="color" type = "text" required = "required" placeholder = "Color"/>
			   		
                     </td>	
				 </tr>
                	 <tr>      
                     <td class = "signup_table_headers">        
                       Upload Watch Image   
                     </td>      
                     <td>       
                       <input class = "signup_table_input" type="file" name="watch_image" required = "required"/>     
                     </td>         
                 </tr>      	 
                
                 <tr>				 
                     <td>
                       <center>					 
                       <input class = "signup_button" type = "submit" name = "submit" value = "Register" />			
                      </center>
					 </td>
                     <td>
                       <center>					 
                       <input class = "reset_button" type = "reset" value = "Reset"/>			
                       </center>
					 </td>					 
                 </tr>					 
               </form>
             </table>
			</center>
            </div>			 
			</td>
			
         </tr>		
        </table> 
    </div>
	
	
      
    
</body> 
</html> 