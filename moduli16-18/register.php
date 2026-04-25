<?php

include_once('config.php');

if(isset($POST['submit'])){
    $name =$_POST['emri'];
    $surname =$_POST['surname'];
    $username =$_POST['username'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $conmfirm_password =$_POST['confirm_password'];
     

    if(empty($name) || empty($surname) || empty($username) || empty($email) || empty($password) || empty($confirm_password)){
        echo "you have to fill all the fields try again";
    }

    else{
        $sql = "INSERT INTO users (name, surname, username, email, password, confirm_password)";
       
        $insertsql = $conn->prepare($sql);
        $insertsql->bindParam(':name',$name);
        $insertsql->bindParam(':surname',$surname);
        $insertsql->bindParam(':username',$username);
        $insertsql->bindParam(':email',$email);
        $insertsql->bindParam(':password',$password);
        $insertsql->bindParam(':confirm_password',$confirm_password);

        $insertsql->execute();

        header("Location: login.php");
     
     }
 }
?>