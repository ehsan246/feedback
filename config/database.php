<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'php_admin');
define('DB_PASS', '123456');
define('DB_NAME', 'php_feedback');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


// Check connection
if($conn->connect_errno){
    die('connection Failed' . $conn->connect_error);
}
echo 'connected';
$sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";
