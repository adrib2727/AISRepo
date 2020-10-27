<?php
    require "clase/clase_nombres.php";
    require "funciones/repeticiones_nombres.php";

    session_start();
    $is = $_SESSION['indiceSesion'];
    $is = $is - 2; /*Hace que el 'terminar' no se vea*/
    $i = 0;
    $datos = array();

    while($i <= $is)
    {
        echo "entra"."<br>";
        $datos[$i] = $_SESSION['nombre'.$i];
        $i++;
    }

    print_r($datos); /*Pinta el Array*/

    /*------------------------------------------*/

    $longitud = count($datos)-1;

    while($i <= $longitud)
    {
        echo "entra2"."<br>";
        $numero_repetido = repeticiones($datos, $longitud);
        $i++;
    }

    session_destroy();
?>