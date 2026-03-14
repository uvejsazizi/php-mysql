<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr >
            <th>drinks</th>
            <th>in stock</th>
            <th>sold</th>
          </tr>  
</body>
</html>

<?php

$food = [
    array("pizza", "italia." ),
    array("pasul", "albania."),
    array("sushi", "china.")
];

echo $food[0][0]. " orgin: ". $food[0][1]."<hr>";
echo $food[1][0]. " orgin: ". $food[1][1]. "<hr>";
echo $food[2][0]. " orgin: ". $food[2][1]. "<hr>";



$drinks = [
    ["coca cola", 200,1500],
    ["golden eagle", 305, 2055],
    ["fanta", 505,1000],
     ["redbull", 150,1600],
    ["fluid", 130, 800],
    ["eks", 100,300],
     ["pepsi",300 ,905],
    ["go+", 400, 4000],
    ["bravo", 600,3000],
     ["fruti", 700,6000],
    ["red rain", 70, 200],
    ["monster", 80,400],
     ["sprite", 500,2000],
    ["sola", 1000, 15400],
    ["rugova",500 ,2000]
];

for($row = 0; $row<15; $row++){
    echo "<tr>";
    for($col = 0; $col<3; $col++){
        echo "<td>". $drinks[$row][$col]. "</td>";
    }
    echo "</tr>";
}

?>