<?php
$host = 'localhost';
$db = 'movie';
$username = 'root';
$password = '';

try{
    $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    // Connection successful
}
catch(PDOException $e){
    echo("Connection failed");
}



?>