<?php
    $password = "masterpopo";

    // password_hash(password, hash algorithm)
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // password_verify(password, hashed password)
    if(password_verify("masterpopo", $hash)){
        echo"You are logged in!";
    }
    else{
        echo"Incorrect password!";
    }
?>