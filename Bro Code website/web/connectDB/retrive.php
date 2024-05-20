<?php
   include("database.php");

   $sql = "SELECT * FROM users";
   $result = mysqli_query($connection, $sql);

   if (mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row["id"] . "<br>";
        echo $row["name"] . "<br>";
        echo $row["reg_date"] . "<br>";

    }

   }
   else{
    echo "No user found";
   }

   mysqli_close($connection);


?>