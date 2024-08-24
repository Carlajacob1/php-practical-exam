<?php
//functions file
include 'functions.php';

//get users name from the URL parameter
$name = isset($_GET['name']) ? $_GET['name'] : '';

//will generate greeting message using the function
echo generateGreeting($name);

?>