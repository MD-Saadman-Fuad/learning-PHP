<?php
   
   $temp = 25;
   $cloud =  true;

   if ($temp >= 0 || $temp<=30){
    echo "The weather is good<br>";
   }
   else{
    echo "The weather is bad<br>";
   }

   if (!$cloud){
    echo "Not Cloudy";
   }
   else{
    echo "Cloudy";
   }
?>