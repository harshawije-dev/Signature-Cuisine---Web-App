<?php

$servername = "localhost";
$username = "";
$password = "";
$db_name = "signature_cuisine";

// connection to database
$conn = new mysqli($servername, $username, $password, $db_name);

if (!$conn) {
    die('Could not connect' . mysqli_errno($conn));
}
else {
    echo "Connected !";
}



