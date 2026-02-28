<?php

$host = "localhost";
$db = "testuvejs";
 $user = "root";
 $pass = "";

 try{
    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

    $sql = "ALTER TABLE products DROP COLUMN name";

    $conn->exec($sql);

    echo("COLUME droped");

 }catch(Exeption $e){

    echo("COLUME NOT droped");
 }
?>