<?php
    require "clases/clase_persona.php";
    require "funciones/ordenacion.php";

    session_start();
    $indice_principal = $_SESSION['indice'];
    $indice_principal = $indice_principal - 2;

    $counter = 0;
    $contador = 0;
    $datos = array();
    $longitud = count($datos) - 1;

    $ind = 0;
    $aux = $longitud;

    while($counter <= $indice_principal)
    {
        $datos[$counter] = $_SESSION['introd_dni'.$counter];
        $datos[$counter] = $_SESSION['introd_nombre'.$counter];
        $datos[$counter] = $_SESSION['introd_apellido'.$counter];
        $datos[$counter] = $_SESSION['introd_edad'.$counter];
        $datos[$counter] = $_SESSION['introd_oficio'.$counter];
        $counter++;
    }

    $counter = 0;
    while($counter < $longitud)
    {
        $posicion = edad_maxima($datos, $longitud);
        $longitud = intercambio_datos($datos, $longitud, $posicion);
    }

    while($ind <= $aux)
    {
        echo $datos[$ind]->__toString()."<br>";
        $ind++;
    }
?>
