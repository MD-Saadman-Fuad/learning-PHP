<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a Country</label>
        <br>
        <input type="text" name="country">
        <br>
        <input type="submit" value="Submit">
    </form> 
</body>
</html>



<?php
    
    $capitals = array("Bangladesh"=>"Dhaka", 
    "USA"=>"Washington DC", 
    "India"=>"New Delhi");

    echo $capitals["India"] . "<br>";

    foreach($capitals as $key => $value){
        echo "{$key} = {$value} <br>";
    }

    $capital = $capitals[$_POST["country"]];
    echo $capital;
    echo "<br>";

    $user = "fuad";

    if (isset($user)){
        echo "Print";
    }
    else{
        echo "Dont Print";
    }
    echo "<br>";
    $user1 = null;

    if (empty($user1)){
        echo "Nothing";
    }
    else{
        echo "Something";
    }

    



?>