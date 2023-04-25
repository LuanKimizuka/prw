<?php

    $a = $_GET['a'];

    if($a % 4 == 0 && $a % 100 != 0 || $a % 400 == 0){
        echo "<h1>Ano bissexto</h1>";
    } else { echo "<h1>Ano não bissexto</h1>";}

?>