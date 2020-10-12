<?php
    $array1 = array(2,12,23,32,48);
    $contador = 0;
    $pos_borrar = 0;
    $longitud = count($array1) - 1; //Longitud del Array.
    $num_borrar = 23; //Posición que queremos borrar.
    $auxiliar = 0;

    //Mostramos datos del Array sin modificar.
    echo "Array original.<br>";
    print_r($array1);
    echo "<br>";
    echo "<br>";

    //Empezamos a modificar.
    //Mientras que el contador esté dentro de la longitud y el número sea menor del número a borrar:
    while($contador <= $longitud and $array1[$contador] <= $num_borrar)
    {
        $contador++;
    }
    if($array1[$contador] > $num_borrar)
    {
        $auxiliar = $longitud;
        $posicion = $contador;

        while($array1[$posicion] <= $auxiliar)
        {
            $array1[$posicion] = $array1[$posicion + 1];
            $posicion++;
        }
    }
    $contador = $longitud - 1;

    echo "Array nuevo.<br>";
    print_r($array1);
?>