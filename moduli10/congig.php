<?php
$host = 'localhost';
$db = 'testuvejs';
$username = 'root';
$password = '';

try{
    $connect = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection succesful";
}
catch(PDOException $e){
    die("Connection failed: " . $e->getMessage());
}


?>