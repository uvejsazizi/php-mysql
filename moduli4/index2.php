 <?php

 $sports1 = ["football", "basketball", "voleyball"];

 echo $sports1[1]."<hr>";

 echo end($sports1)."<hr>";

 echo count($sports1)."<hr>";

  for($count=0; $count<3; $count++){
    echo $sports1[$count]."<hr>";
   }

   array_push($sports1, 'golf');

    for($count=0; $count<4; $count++){
    echo $sports1[$count]."<hr>";
   }

   array_push($sports1, 'golf');

   array_pop($sports1);

   var_dump($sports1);

   array_unshift($sports1, 'tenis');

   var_dump($sports1);

   array_shift($sports1);

   var_dump($sports1);

   $numbers=[1,2,3,4,5,6,7,8,9];

   $mbledhja =  array_sum($numbers);

   echo $mbledhja."<hr>";








 ?>