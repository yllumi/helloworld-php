<?php

// show error reporting
error_reporting(E_ALL);

// include connection
include_once("connection.php");

// Get data from mahasiswa
$sql = "SELECT * FROM mahasiswa";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["nama"]. " - NIM: " . $row["nim"]. "<br>";
    }
} else {
    echo "0 results";
}
