<?php
    $username = array("popo", "the", "great");
    $phone = "123-123-123";

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username, 20, "o");
    // $phone = str_replace("-", "", $phone);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $equals = strcmp($username, "Popo popo");
    // $count = strlen($username);
    // $index = strpos($username, " ");
    // $fname = substr($username, 0, 4);
    // $fullname = explode(" ", $username);
    $username = implode(" ", $username);

    echo $username;
?>
