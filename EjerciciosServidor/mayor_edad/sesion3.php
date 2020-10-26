<?php
    require "clase/clase_nombres.php";
    require "funciones/repeticiones_nombres.php";

    session_start();
    $is = $_SESSION['indiceSesion'];

    $i = 0;
    $datos = array();

    while($i <= $is)
    {
        echo "entra"."<br>";
        $datos[$i] = $_SESSION['nombre'.$i];
        $i++;
    }

    $longitud = count($datos) - 1;

    while($i <= $longitud)
    {
        echo "entra2"."<br>";
        $numero_repetido = numero_primo($datos, $longitud);
    }

    session_destroy();
?>