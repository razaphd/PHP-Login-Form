<?php

$db_host = "mysql://mysql:3306/";
$db_name = "sampledb";
$db_user = "userDI6";
$db_pass = "6BUcY7jYp5fR4irf";


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
