<?php
    $foods = array("apple", "orange", "banana", "coconuts");

    
    $flag = true;
    $count=0;
    while ($flag){
        echo "$foods[$count]<br>";
        $count++;
        if($count==4){
            $flag=false;
        }
    }


?>