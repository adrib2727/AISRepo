<?php
    require "funciones/numero_primo.php";

    session_start();
    $is = $_SESSION['indiceSesion'];
    $is = $is - 2;

    $i = 0;
    $datos = array();

    while($i <= $is)
    {
        echo "entra"."<br>";
        $datos[$i] = $_SESSION['numero'.$i];
        $i++;
    }

    $longitud = count($datos) - 1;

    while($i <= $longitud)
    {
        echo "entra2"."<br>";
        $cont1 = numero_primo($datos, $longitud);
    }

?>

