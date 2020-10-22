<?php
    require "clases/clase_persona.php";
    require "funciones/funciones.php";

    session_start();
    $valor_sesion = $_SESSION['indice'];
    $valor_sesion = $valor_sesion - 2;

    $ind_sesion = 0; //Esto es como el contador.
    $contador = 0;
    $datos = array();
    $longitud = count($datos) - 1;

    $ind = 0;
    $aux = $longitud;

    //Se tiene que almacenar cada cosa en EL OBJETO 
    while($ind_sesion <= $valor_sesion)
    {
        echo "Este bucle se ejecuta"."<br>";
        $datos[$ind_sesion] = $_SESSION['introd_dni'.$ind_sesion];
        $datos[$ind_sesion] = $_SESSION['introd_nombre'.$ind_sesion];
        $datos[$ind_sesion] = $_SESSION['introd_apellido'.$ind_sesion];
        $datos[$ind_sesion] = $_SESSION['introd_edad'.$ind_sesion];
        $datos[$ind_sesion] = $_SESSION['introd_oficio'.$ind_sesion];
        $ind_sesion++;
    }

    $ind_sesion = 0;
    while($ind_sesion < $longitud)
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
