<?php
if (function_exists('mysql_connect')) {
    echo "- MySQL <b>is installed</b>.<br>";
} else  {
    echo "- MySQL <b>is not</b> installed.<br>";
}

if (function_exists('mysqli_connect')) {
    echo "- MySQLi <b>is installed</b>.<br>";
} else {
    echo "- MySQLi <b>is not installed</b>.<br>";
}

if (function_exists('mysqli_get_client_stats')) {
    echo "- MySQLnd driver is being used.<br>";
} else {
    echo "- libmysqlclient driver is being used.<br>";
}

$servername = "docker-mariadb";
$username = "root";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>