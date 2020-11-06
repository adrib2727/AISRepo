<?php
    //Sacar edad máxima
    function edad_maxima($array1, $longitud)
    {
        $contador = 0;
        $maximo = 0;
        $posicion = 0;
        while($contador <= $longitud)
        {
            if($array1[$contador] > $maximo)
            {
                $maximo = $array1[$contador];
                $posicion = $contador;
            }
            $contador++;
        }
        return $posicion;
    }

    function intercambiar_datos(&$array1, $longitud, $posicion)
    {
        $auxiliar = $longitud;
        $auxiliar = $array1[$posicion];
        $array1[$posicion] = $array1[$longitud];
        $array1[$longitud] = $auxiliar;
        $longitud--;

        return $longitud;
    }
?>
