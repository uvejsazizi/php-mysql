<?php

$host = "localhost";
$db = "chaalange";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected successfully!";

} catch(Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>