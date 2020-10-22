<?php
    require "funciones/funcion_ordenar.php";
    session_start();

    $indice = $_SESSION['ind'];
    $indice = $indice - 2;

    $contador = 0;
    $ind = 0;
    $array1 = array();
    $longitud = count($array1);
    $aux = $longitud;

    while($ind <= $indice)
    {
        $array1[$ind] = $_SESSION['introd_num'.$ind];
        $ind++;
    }

    while($contador < $longitud)
    {
        $posicion = edad_maxima($array1, $longitud);
        $longitud = intercambiar_datos($array1, $longitud, $posicion);

    }

    while($ind <= $aux)
    {
        echo $array1[$ind]."<br>";
        $ind++;
    }
?>
