<?php

$host = "localhost";
$db = "testuvejs";
 $user = "root";
 $pass = "";

 try{
    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

    $sql = "DROP TABLE products";

    $conn->exec($sql);

    echo("TABLE droped");

 }catch(Exeption $e){

    echo("TABLE NOT droped");
 }
?>