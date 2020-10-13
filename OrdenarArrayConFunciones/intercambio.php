<?php
    function intercambio_datos($array1, $posicion, $longitud)
    {
        $auxiliar = $longitud;
        $array1[$posicion] = $array1[$auxiliar];
        $array1[$auxiliar] = $array1[$posicion];

        $indice = 0;
        while($indice <= $longitud)
        {
            echo $array1[$indice]."<br>";
            $indice++;
        }
    }
?>