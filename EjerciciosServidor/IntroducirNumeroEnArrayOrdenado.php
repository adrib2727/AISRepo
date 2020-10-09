<?php
    $array1 = array(2,12,23,32,48); //Array ordenado
    $valor_nuevo = 25;
    $contador = 0;
    $longitud = count($array1)-1;

    echo "Array original.<br>";
    print_r($array1);
    echo "<br>";
    /*Aqui empezamos a modificar*/

    while($contador <= $longitud and $array1[$contador] <= $valor_nuevo)
    {
        $contador = $contador + 1;
    }
    print_r($array1);
    if($array1[$contador] > $valor_nuevo)
    {
        $posicion = $contador;

        while($longitud >= $posicion)
        {
            $array1[$longitud] = $array1[$longitud-1];
            $longitud--;
        }
        $array1[$posicion] = $valor_nuevo;
    }
    else
    {
        $posicion = $contador;
        $array1[$posicion] = $valor_nuevo;
    }

    echo "Nuevo array.<br>";
    print_r($array1);
?>