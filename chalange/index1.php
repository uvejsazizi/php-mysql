<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY PRODUCTS</title>
</head>
<body>

<?php
  include_once('config.php');
  
  $sql = "SELECT * FROM products";

  $getproducts = $conn->prepare($sql);

  $getproducts->execute();

  $products = $getproducts->fetchALL();
?>
    
</body>
</html>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th></th>
    </tr>

    <tr>
        <?php
           foreach($products as $product){

           }      
        
        ?>

        <td><?= $product['id'] ?></td>
        <td><?= $product['name'] ?></td>
        <td><?= $product['price'] ?></td>
        <td><?= $product['category_id'] ?></td>
    </tr>
</table>