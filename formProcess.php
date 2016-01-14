<?php
    $name = $_POST["dogName"];
    $age = $_POST["dogAge"];
    // $_GET
    // $_REQUEST, three super global variable in php
    echo "Your dog is named" . $name . " and your dog is " . $age . " human years old.";

    $dogAge = $age * 7;

    echo("<br/>Your dog is  " . $dogAge . " in dog years.")
?>