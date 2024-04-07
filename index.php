<?php
    $password = "masterpopo";

    // password_hash(password, hash algorithm)
    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo $hash;
?>