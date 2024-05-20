<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label>Quantity: </label>
        <input type="text" name="q">
        <input type="submit" value="total">

    </form>
</body>
</html>
<?php
  $item = "pizza";
  $price = 4.99;
  $q = $_GET["q"];
  $total = null;

  $total = $q * $price;

  echo "your total is  \${$total}<br>";
  echo "\$$$$"
?>