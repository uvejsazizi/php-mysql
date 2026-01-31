<?php

function Mymax($x , $y){

    if($x > $y){

        return $x;
    }
    else{

        return $y;
    }
}

$a= 20;

$b=30;

$test = max($a , $b);

echo "the max of $a and $b is $test \n";

?>