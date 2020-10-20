<?php
    require_once();
    session_start();
    $indice = $_SESSION['indice'];
    $indice = $indice - 2;
    $aux = 0;
    $contenido = array();

    while($aux <= $indice)
    {
        array_push($contenido, $_SESSION['num_letra_palabra'.$aux]);
        $aux++;
    }
    $salida = repeticiones($contenido)
    print_r($salida);
?>