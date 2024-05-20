<?php
   $grade="A";
   switch($grade){
    case "A":
        echo "You did great";
        break;
    case "'B":
        echo "You did good";
        break;
    case "'C":
        echo "You did okay";
        break;
    case "'D":
        echo "You did poorly";
        break;
    case "'E":
        echo "You failed";
        break;
    default:
      echo "{$grade} was not valid";

   }


?>