<?php

$host = "localhost";
$db = "testuvejs";
 $user = "root";
 $pass = "";

 try{
    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

    $sql = "ALTER TABLE users ADD tel INT(12)";

    $conn->exec($sql);

    echo("COLUME ADDED");

 }catch(Exeption $e){

    echo("COLUME NOT ADDED");
 }
?>