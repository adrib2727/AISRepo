<?php
    function numero_maximo($array1, $longitud)
    {
        $contador = 0;
        $posicion = 0;
        $maximo = 0;

        while($contador <= $longitud)
        {
            if($array[$contador] > $maximo)
            {
                $maximo = $array1[$contador];
                $posicion = $contador;
            }
            $contador++;
        }
        return $posicion;
    }
?>