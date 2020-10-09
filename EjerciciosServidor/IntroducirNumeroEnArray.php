<?php
    $array1 = array(28,32,90,54,3);

    foreach($array1 as $numeros)
    {
        echo ",$numeros";
    }
    echo "<br>";

    $nuevo_numero = array_push($array1,100);
    foreach($array1 as &$nuevo_numero)
    {
        echo ",$nuevo_numero";
    }
?>