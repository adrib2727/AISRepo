<?php
    $array1 = array(28,32,90,54,3);
    $valor_nuevo = 100;
    $indice = 0;
    $posicion = 4;
    $longitud = count($array1);
    $auxiliar = $longitud;

    echo "Array original.<br>";
    print_r($array1);
    echo "<br>";

    while($longitud >= $posicion)
    {
        $array1[$longitud] = $array1[$longitud-1];
        $longitud--;
    }
    echo "Nuevo array.<br>";
    $array1[$posicion] = $valor_nuevo;
    print_r($array1);

    /*while($indice <= $auxiliar + 1)
    {
        echo $array1[$indice]."<br>";
        $indice++;
    }*/
?>