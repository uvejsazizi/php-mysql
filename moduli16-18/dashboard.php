<?php

session_start();

include_once('config.php');

$sql ="SELECT * FROM users";
$selectUsers = $conn->prepare($sql);
$selectUsers->execute();


$user_data = $selectUsers->fetchAll();



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        table, th, td{
            border: 1px solid black;
        }
        td,th{
            padding:20px
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <table>
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>Surname</th>
        <th>Username</th>
        <th>Email</th>
         <th>password</th>
         <th>Actions</th>
    </tr>

    <?php
        foreach($user_data as $user){
    ?>
    <tr>
        <td><?= $user['id']?></td>
        <td><?= $user['name']?></td>
        <td><?= $user['surname']?></td>
        <td><?= $user['username']?></td>
        <td><?= $user['email']?></td>
        <td><?= $user['password']?></td>
        <td><a href="edit.php?id=<?= $user['id']; ?>">EDIT</a> | <a href="delete.php?id=<?= $user['id']; ?>">DELETE</a></td>
    </tr>
    <?php } ?>


</table>
  </body>
</html>