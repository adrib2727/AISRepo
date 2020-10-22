<?php
    require
    session_start();
    $indice = $_SESSION['indice'];
    $indice = $indice - 2;
    $aux = 0;
    $contenido = array();
    $longitud = count($personas) - 1;
    $contador = 0;
    $auxiliar = $longitud;

    //Llamada de funciones
    while($indice <= $longitud)
    {
        $posicion = edad_maxima($personas, $longitud);
        $longitud = intercambiar_datos($personas, $longitud, $posicion);
    }

    while($indice <= $auxiliar)
    {
        echo $personas[$indice]."<br>";
        $indice++;
    }
?>
?>