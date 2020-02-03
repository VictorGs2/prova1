<?php
$servername = "200.132.13.90";
$username = "roger";
$password = "roger";
$database = "josevictor";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if($mysqli->connect_error) {
    die("Connection failed: " .$mysqli->connect_error);
}
?>