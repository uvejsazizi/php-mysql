<?php

    // $my_file = fopen("ds.txt",  "w")

    $my_file = fopen("ds.txt", "w");


     //while(!feof($my_file)){
        //echo fgets($my_file). "<hr>";
    // }

    //fclose($my_file);

    $text = "digital school";

    fwrite($my_file, $text);

    $my_file = fopen("ds.txt", "r");

       while(!feof($my_file)){
        echo fgets($my_file). "<hr>";
     }


?>