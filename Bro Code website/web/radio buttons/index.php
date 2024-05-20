<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="card" value="Visa">
        Visa<br>
        <input type="radio" name="card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="card" value="Applepay">
        ApplePay<br><br>
        <input type="submit" name="confirm" value="Confirm">



    </form>
</body>
</html>

<?php

  if (isset($_POST["confirm"])){
    $credit_card = null;
    if(isset($_POST["card"])){
        $credit_card = $_POST["card"];
    
    }
    if ($credit_card=="Visa"){
        echo "You selected Visa";
    }
    elseif ($credit_card=="Mastercard"){
        echo "You selected Mastercard";
    }
    elseif ($credit_card=="Applepay"){
        echo "You selected ApplePay";
    }
    else{
        echo "<br>Enter your preference of pay";
      }

    switch($credit_card){
        case "Visa":
            echo "<br>You selected Visa";
            break;
        case "Visa":
            echo "<br>You selected Visa";
            break;
        case "Visa":
            echo "<br>You selected Visa";
            break;
        default:
            echo "<br>Please enter pay method";
    }
    

  }
  


?>