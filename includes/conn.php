<?php
// connection to db
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "waspwebdb";
$port = 3333; // Default is 3306

$conn = mysqli_connect($serverName, $userName, $password, $dbName, $port);
?>