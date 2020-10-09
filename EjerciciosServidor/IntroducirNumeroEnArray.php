<?php
    $array1 = array(28,32,90,54,3);
    $valor = 100;
    $posicion = 4;
    $longitud = count($array1);

    echo "Array original.<br>";
    print_r($array1);
    echo "<br>";

    while($longitud >= $posicion)
    {
        $array1[$longitud] = $array1[$longitud-1];
        $longitud--;
    }
    echo "Nuevo array.<br>";

    
?>