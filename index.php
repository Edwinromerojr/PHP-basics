<?php
    // (name, value, expire, filepath)
    setcookie("fav_food", "donut", time() + (86400 * 2), "/");
    setcookie("fav_drink", "water", time() + (86400 * 3), "/");
    setcookie("fav_dessert", "ice cream", time() + (86400 * 4), "/");

    foreach($_COOKIE as $key => $value){
        echo"{$key} = {$value} <br>";
    }

    if(isset($_COOKIE["fav_food"])){
        echo"BUY SOME {$_COOKIE["fav_food"]}!!";
    }
    else{
        echo"i dont know your favorite food";
    }
?>