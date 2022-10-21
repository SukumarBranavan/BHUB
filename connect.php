<?php 
$host="localhost:3306";
$username1="root";
$password="!QAZ2wsx";
$db="telesis_bhub";
// Create connection
$conn = new mysqli($host, $username1, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
