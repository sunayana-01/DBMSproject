<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "schoolnew";

// Create connection
$conn =  mysqli_connect($server, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
