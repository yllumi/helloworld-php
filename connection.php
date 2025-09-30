<?php

// MySQL database connection details
$host     = 'localhost'; // MySQL server hostname
$user     = 'admin'; // MySQL username
$password = 'admin'; // MySQL password
$database = 'helloworld'; // MySQL database name

// Create a database connection
$connection = new mysqli($host, $user, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} else {
    echo "Connected successfully <br>";
}

