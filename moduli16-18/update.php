<?php

include_once('config.php');

if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "UPDATE users 
        SET username = :username,
        name = :name,
        surname = :surname,
        email = :email,
        password = :password
        WHERE id = :id";
        
        $updateUsers = $conn->prepare($sql);
        $updateUsers->bindParam(':id', $id);
        $updateUsers->bindParam(':username', $username);
        $updateUsers->bindParam(':name', $name);
        $updateUsers->bindParam(':surname', $surname);
        $updateUsers->bindParam(':email', $email);
        $updateUsers->bindParam(':password', $password);
        
        if($updateUsers->execute()) {
            header('Location: dashboard.php');
        }
    }