<?php
$servername = "localhost:3306";
$database = "prueba";
$username = "root";
$password = "katavigaming5";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);

