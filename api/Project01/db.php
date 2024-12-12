<?php

ini_set('display_errors', 0); 
ini_set('log_errors', 1); 
ini_set('error_log', 'php_errors.log'); 
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS"); 
header("Access-Control-Allow-Headers: Content-Type,Authorization,X-Requested-With"); 
header("Content-Type: application/json");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_01";

// connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}else{
    echo "Connection";
}

?>