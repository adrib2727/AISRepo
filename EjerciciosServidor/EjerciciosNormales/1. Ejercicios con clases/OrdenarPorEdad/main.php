<?php
    require "phpclases/claseordenarpersonasporedad.php";
    require "phpfunciones/funcionesordenarpersonasporedad.php";

    //Introducción de personas.
    $per1 = new Persona("392048392", "James", "Hetfield", "56");
    $per2 = new Persona("483920394", "Lars", "Ulrich", "67");
    $per3 = new Persona("384729483", "Kirk", "Hammet", "54");
    $per4 = new Persona("403948203", "Angus", "Young", "24");
    $per5 = new Persona("203948201", "Brian", "Johnson", "89");
    $per6 = new Persona("395439485", "Malcolm", "Young", "10");
    $per7 = new Persona("394857394", "Phil", "Rudd", "69");
    $per8 = new Persona("604930586", "Cliff", "Williams", "16");
    $per9 = new Persona("039485983", "David", "Gilmour", "54");
    $per10 = new Persona("583048573", "Robert", "Trujillo", "77");

    //Creación del Array
    $personas = array($per1, $per2, $per3, $per4, $per5, $per6, $per7, $per8, $per9, $per10);
    $longitud = count($personas) - 1;
    $contador = 0;
    $indice = 0;
    $auxiliar = $longitud;

    //Llamada de funciones
    while($indice <= $longitud)
    {
        $posicion = edad_maxima($personas, $longitud);
        $longitud = intercambiar_datos($personas, $longitud, $posicion);
    }

    while($indice <= $auxiliar)
    {
        echo $personas[$indice]->__toString()."<br>";
        $indice++;
    }
?>
    