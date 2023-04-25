<?php

    $n = $_POST['n'];
    $not1 = $_POST['not1'];
    $not2 = $_POST['not2'];
    $f = $_POST['f'];
    $m = ($not1 + $not2)/2;

    if($m < 5){ echo "<h1 style='color:red';>Reprova por nota</h1>";}
    if($f < 75 ){echo "<h1>Reprova por Frequencia</h1>";}
    if($m > 5 && $f > 75){echo "<h1>Aprovado</h1>";}

?>