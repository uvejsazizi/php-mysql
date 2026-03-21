<?php


    include_once('config.php'); 


    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];


        
        $sql = "insert into user (name, surname, email) values (:name, :surname, :email)";
        $sqlQuery = $conn->prepare($sql);
    
        $sqlQuery->bindParam(':name', $name); 
        $sqlQuery->bindParam(':surname', $surname); 
        $sqlQuery->bindParam(':email', $email);


        $sqlQuery->execute();


        echo "Data saved successfully ...<br>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Add user</title>
</head>
<body>
    <a href="index.php">Dashboard</a>
    <form action="add.php" method="POST">
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="suename" placeholder="Surname"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <button type="submit" name="submit">Add</button>
    </form>

    
</body>
</html>