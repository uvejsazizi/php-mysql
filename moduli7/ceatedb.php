<?php

$host = "localhost";
 $user = "root";
 $pass = "";

 try{
    $conn = new PDO("mysql:host=$host", $user, $pass);

    $sql = "CREATE DATABASE testuvejs";

    $conn->exec($sql);

    echo("Connected");

 }catch(Exeption $e){

    echo("Not connected");
 }
?>