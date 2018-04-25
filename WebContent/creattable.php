<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$databasename = "huy";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $databasename);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE client_mail (
Name VARCHAR(30) NOT NULL,
Email VARCHAR(30) NOT NULL,
Message VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>