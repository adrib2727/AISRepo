<?php
    require "codigo/funciones/funciones.php";
    $array1 = array(56,12,43,7,2);
    $longitud = count($array1) - 1;
    $indice = 0;
    $auxiliar = $longitud;
    
    while($indice <= $longitud)
    {
        $posicion = numero_maximo($array1, $longitud);
        $longitud = intercambio_datos($array1, $posicion, $longitud);
    }
    
    while($indice <= $auxiliar)
    {
        echo $array1[$indice]."<br>";
        $indice++;
    }
?>