
<?php
   $date_array = getdate();
   
   $formated_date  = "";
   $formated_date .= $date_array['mday'] . "/";
   $formated_date .= $date_array['mon'] . "/";
   $formated_date .= $date_array['year'];
   
   print $formated_date;
?>