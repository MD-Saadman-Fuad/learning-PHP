<?php
   include("database.php");

   $username = "apple1";
   $pass = "1234";
   $hash = password_hash($pass, PASSWORD_DEFAULT);

   $sql = "INSERT INTO  users (name, password)
           VALUES ('$username', '$hash')";
   
   try{
    mysqli_query($connection, $sql);
    echo "Registered";
   }
   catch(mysqli_sql_exception){
    echo "Couldnt register";
   }

   mysqli_close($connection);
?>
