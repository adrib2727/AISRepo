<?php
    //Sacar edad máxima
    function edad_maxima($personas, $longitud)
    {
        $maximo = 0;
        $posicion = 0;
        while($contador <= $longitud)
        {
            if($personas[$contador]->getEdad() > $maximo)
            {
                $maximo = $personas[$contador]->getEdad();
                $posicion = $contador;
            }
            $contador++;
        }
        return $posicion;
    }

    function intercambiar_datos(&$personas, $longitud, $posicion)
    {
        $auxliar = $longitud;
        $auxiliar = $personas[$posicion];
        $personas[$posicion] = $personas[$longitud];
        $personas[$longitud] = $auxiliar;
        $longitud--;

        return $longitud;
    }
?>






?>