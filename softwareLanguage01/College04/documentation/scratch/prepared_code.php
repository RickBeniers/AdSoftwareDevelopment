<?php
/**
 * Created by: Stephan Hoeksema 2023
 * SL01COL04
 */
$pages = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/index.php',
];

//DB Connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "profileApp";

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}