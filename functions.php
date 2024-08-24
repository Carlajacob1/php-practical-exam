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

//generate greeting using function
echo generateGreeting($name);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>"
        <input type="submit" value="Submit">
        </form>
</body>
</html>
