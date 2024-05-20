<?php
    
    setcookie("food", "pizza", time()+86400, "/");
    setcookie("drink", "juice", time()+(86400*2), "/");
    setcookie("dessert", "cake", time()+86400, "/");

    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value}<br>";
    }

    if(isset($_COOKIE["food"])){
        echo "Buy some {$_COOKIE["food"]}";
    }
    else{
        echo "I dont know your favourite food";
    }





?>