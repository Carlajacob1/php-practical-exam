<?php

//phillipines time zone
date_default_timezone_set('Asia/Manila');
//define the function to generate greeting message
function generateGreeting($name) {
//default name
    if(empty($name)) {
        $name = "World";
    }

//current date and time
$currentDateTime = date("Y-m-d h:i:sa");

//greeting message
return "Hello, " .htmlspecialchars($name) . "!<br>Current date and time: " . $currentDateTime;

}





?>