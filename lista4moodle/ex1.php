<?php

    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $c = $_GET['calc'];
    $x = 0;

    if($c == "soma"){
        $x = $n1 + $n2;
}
    
    else if($c == "subtracao"){
        $x = $n1 - $n2;
}
    
    else if($c == "multiplicacao"){
        $x = $n1 * $n2;
}
    
    else if($c == "divisao"){
        $x = $n1 / $n2;
}

    echo "<h1>Resultado: $x</h1>";

?>