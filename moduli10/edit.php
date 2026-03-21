<?php

include_once("congig.php");

$id= $_GET['id'];

$sql ="SELECT * FROM users WHERE id= :id";

$getUsers =$conn-> prepare($sql);

$getUsers->bindParam(":id",$id);

$getUsers->execute();

$data = $prep -> fetch();


?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    
<form action="update.php" method="POST">
    
</body>
</html>