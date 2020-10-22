<?php
    //Sacar edad máxima
    function edad_maxima($datos, $longitud)
    {
        $contador = 0;
        $maximo = 0;
        $posicion = 0;

        while($contador <= $longitud)
        {
            if($datos[$contador]->getEdad() > $maximo)
            {
                $maximo = $datos[$contador]->getEdad();
                $posicion = $contador;
            }
            $contador++;
        }
        return $posicion;
    }

    function intercambiar_datos(&$datos, $longitud, $posicion)
    {
        $auxiliar = $longitud;
        $auxiliar = $datos[$posicion];
        $datos[$posicion] = $datos[$longitud];
        $datos[$longitud] = $auxiliar;
        $longitud--;

        return $longitud;
    }
?>
