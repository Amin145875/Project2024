<?php
$servername = "localhost"; // database server name
$username = "username"; //  username
$password = "email"; // password 
$email="password";//email
$dbname = "sign_in"; // database name

// Create connection
$conn = new mysqli($servername, $username,$email, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
