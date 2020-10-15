<?php
  function numero_maximo($array1, $longitud)
    {
        $contador = 0;
        $posicion = 0;
        $maximo = 0;

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

    function intercambio_datos(&$array1, $posicion, $longitud)
    {
        $auxiliar = $longitud;

        $auxiliar = $array1[$posicion];
        $array1[$posicion] = $array1[$longitud];
        $array1[$longitud] = $auxiliar;
        $longitud--;
        return $longitud;
    }
?>