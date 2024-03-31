<?php
    $temp = 100;
    $cloudy = true;

    // ($temp < 0 || $temp > 30)
    if($temp >= 0 && $temp <=30){
        echo"The weather is good.";
    }
    else{
        echo"The weather is bad.";
    }

    if(!$cloudy){
        echo"It's sunny.";
    }
    else{
        echo"It's cloudy.";
    }
?>
