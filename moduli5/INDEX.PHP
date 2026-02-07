<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr border="1">
            <th>phone</th>
            <th>in stock</th>
            <th>sold</th>
          </tr>  
</body>
</html>
<?php

$dogs = [
    array("husky", "siberia", 15),
    array("bulldog", "england", 10),
    array("chihuahua", "mexico",20)
];

echo $dogs[0][0]. " orgin: ". $dogs[0][1]. "life span:". $dogs [0][2]."<hr>";
echo $dogs[1][0]. " orgin: ". $dogs[1][1]. "life span:". $dogs [1][2]."<hr>";
echo $dogs[2][0]. " orgin: ". $dogs[2][1]. "life span:". $dogs [2][2]."<hr>";


$phones = [
    ["iphone 15", 20,15],
    ["iphone 16", 30, 20],
    ["iphone 17", 50,50]
];


for($row = 0; $row<3; $row++){
    echo "<tr>";
    for($col = 0; $col<3; $col++){
        echo "<td>". $phones[$row][$col]. "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>