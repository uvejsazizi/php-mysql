<?php

$host = "localhost";
$db = "chaalange";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DROP TABLE IF EXISTS products";

    $conn->exec($sql);

    echo "Table dropped successfully!";

} catch(Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>