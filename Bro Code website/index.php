<?php

echo "I like coding, and coding<br>";
echo "I love kacchi"



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
    <button>Order a pizza</button>
    <br>
    <br>
</body>
</html>

<?php
   echo"<br>";
   $name = 'Fuad';
   $food = "Kaacchi";
   $email = "fuad@gmail.com";

   $age = 21;
   $users = 2;
   $quantity = 3;

   $gpa = 2.5;
   $price = 5.99;

   $employed = True;
   $Active = True;
   $for_sale =False;
   $total = null;

   echo "Hi, my name is {$name}.<br>";
   echo "I love {$food}.<br>";
   echo "My email is {$email}.<br>";
   echo "My age is {$age}.<br>";
   echo "There are {$users} users online.<br>";
   echo "Your GPA is {$gpa}.<br>";
   echo "My Kacchi is \${$price}.<br>";
   echo "Active Status {$Active}.<br>";

   echo "You have ordered {$quantity} x {$food}'s <br>";
   $total = $quantity * $price;
   echo "Your total is \${$total}.<br>";

?>