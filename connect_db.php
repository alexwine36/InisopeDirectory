<?php
$servername = "localhost";
$username = "inisope";
$password = "raincoat";
$dbname = "Inisope";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>