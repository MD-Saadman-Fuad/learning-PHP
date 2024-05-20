<?php
   
   $password = "123";
   $hash = password_hash($password, PASSWORD_DEFAULT);
   echo "<br>$hash<br>";

   if (password_verify("l123", $hash)){
    echo "you are logged in";
   }
   else{
    echo "incorrect";
   }

?>