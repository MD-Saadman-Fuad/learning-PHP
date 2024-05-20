<?php
   $db_server = "localhost";
   $db_user = "root";
   $db_pass = "";
   $db_name = "buisnessdb";
   $connection1 = "";
   try{
    $connection1 = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

   }
   //$connection = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
   catch(mysqli_sql_exception){
    //echo"couldnt connect";
   }
   if ($connection1){
    //echo "Connected";
   }
   
?>