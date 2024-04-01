<?php
    $foods = array("apple", "orange", "banana", "coconut");
    // $foods[0] = "pineapple";
    // array_push($foods, "pineapple", "kiwi");
    // array_pop($foods);
    // array_shift($foods);
    // $foods = array_reverse($foods);
    echo count($foods) . "<br>";

    echo $foods[0] . "<br>";
    foreach($foods as $food){
        echo $food . "<br>";
    }
?>
