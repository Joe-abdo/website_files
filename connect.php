<?php
$servername = "localhost";
$username   = "██████████████████";
$password   = "███████";
$dbname     = "██████████████████";
$conn       = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8mb4");
?>
