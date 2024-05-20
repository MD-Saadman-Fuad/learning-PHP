<?php
   $hours = 50;
   $rate = 15;
   $ot_rate = ($rate*1.5);
   $weekly = null;
   if ($hours<=0){
    $weekly = 0;
   }
   elseif ($hours<=40){
    $weekly = ($hours * $rate);
   }
   else{
    $weekly = ((40*$rate)+(($hours-40)*$ot_rate));
   }
   echo "You made \${$weekly} this week";

?>