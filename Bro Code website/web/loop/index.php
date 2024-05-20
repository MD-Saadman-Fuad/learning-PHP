<?php
   $seconds = 0;
   $state= true;

   for ($i=0;$i<10;$i+=3){
    echo $i . "<br>";
   }

   while ($state){
      echo "Hello World<br>";
      if ($seconds == 10){
         $state = false;
      }
      $seconds++;
   }






?>