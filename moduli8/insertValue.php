<?php

$host = "localhost";
$db = "testuvejs";
 $user = "root";
 $pass = "";

 try{
    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

    $username = "uvejs";

    $password = "vesi18";

    $sql = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

    $conn->exec($sql);

    echo("Connected");

 }catch(Exeption $e){

    echo("Not connected");
 }
?>