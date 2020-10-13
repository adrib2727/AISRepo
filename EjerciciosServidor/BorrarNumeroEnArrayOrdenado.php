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
    while($contador <= $longitud and $array1[$contador] != $num_borrar)
    {
        $contador++;
    }
    if($array1[$contador] > $num_borrar)
    {
        echo "El numero no exíste";
    }
    else
    {
        $indice = $contador;
        while($indice < $longitud)
        {
            $array1[$indice] = $array1[$indice+1];
            $indice++;
        }
        $longitud = $longitud - 1;

        $indice = 0;
        while($indice <= $longitud)
        {
            echo $array1[$indice]."<br>";
            $indice++;
        }
    }
?>