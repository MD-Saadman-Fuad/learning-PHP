<?php
  function hey($name){
    echo "hey there {$name}<br>";
  }
  hey("fuad");
  hey("saadman");
  hey("md");

  function is_even($number){
    $result = $number % 2;
    if ($result == 1){
        return "Odd<br>";
    }
    else{
        return "Even<br>";
    }
  }
  echo is_even(11);
  echo is_even(10);




?>