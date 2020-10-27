<?php
    require "clases/clase_edad.php";
    require "funciones/mayor_edad.php";

    session_start();
    $is = $_SESSION["indiceSesion"];
    $is = $is - 2; /*Hace que el 'terminar' no se vea*/
    $i = 0;
    $datos = array();

    while($i <= $is)
    {
        echo "entra"."<br>";
        $datos[$i] = $_SESSION['nombre'.$i];
        $i++;
    }

    $longitud = count($datos)-1;
    $aux = $longitud;
    $ind = $i;

    while($i <= $longitud)
    {
        $mayor_edad = calcular_edad($datos, $longitud);
        $menor_edad = calcular_edad($datos, $longitud);
        $i++;
    }

    while($ind <= $aux)
    {
        echo $datos[$ind]->toString()."<br>";
        $ind++;
    }

    session_destroy();
?>