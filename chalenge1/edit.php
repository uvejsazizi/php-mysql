<?php

include_once("config.php");

if(!isset($_GET['id'])){
    die("User ID not provided!");
}

$id= $_GET['id'];

$sql ="SELECT * FROM users WHERE id= :id";

$getUsers =$conn-> prepare($sql);

$getUsers->bindParam(":id",$id);

$getUsers->execute();

$data = $getUsers -> fetch();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
<form action="update.php" method="POST">
    
</form>
</body>
</html>