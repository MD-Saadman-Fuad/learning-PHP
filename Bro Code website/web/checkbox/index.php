<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        pizza<br>
        <input type="checkbox" name="burger" value="Burger">
        Burger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">
        HotDog<br>
        <input type="submit" name="submit">


    </form>
</body>
</html>

<?php
   
   if (isset($_POST["submit"])){

    if (isset($_POST["pizza"])){
        echo "Pizza<br>";
    }
    elseif (isset($_POST["burger"])){
        echo "Burger<br>";
    }
    elseif (isset($_POST["hotdog"])){
        echo "Hotdog<br>";
    }
    else{
        echo "Select<br>";
    }



   }
    


?>