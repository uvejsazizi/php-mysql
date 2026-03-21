<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>

<style>

table,td,th{
    border: 1px solid black;
    border-collapse:collapse;
}

td,th{
    padding: 10px 20px;
}


</style>
</head>
<body>
    <?php
    include_once('congig.php');
    $sql ="SELECT * FROM user";
    $getUsers = $conn->prepare($sql);
    $getUsers->execute();
    $user=$getUsers->fetchAll();
    
    
    
    
    ?>


    <table>
        <thead>
            <th>Id</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>

        </thead>

        <tbody>


   <?php
   foreach($users as $user){
   ?>

   <tr>
    <td><?=$user['id']?> </td>
    <td><?=$user['name']?> </td>
    <td><?=$user['surname']?> </td>
    <td><?=$user['email']?> </td>

   </tr>
   <?php
   }
   ?>
   
   
   
        </tbody>

    </table>
    <a href="">Add User</a>

  
</body>
</html>