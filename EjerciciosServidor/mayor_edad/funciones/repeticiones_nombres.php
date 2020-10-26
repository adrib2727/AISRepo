<?php
    function repeticiones($datos, $longitud)
    {
        $contador1 = 0;
        $contador2 = 0;
        $repeticiones = 0;
        $numero_repetido = 0;

        while($contador1 <= $longitud)
        {
            while($contador2 <= $longitud)
            {
                if($datos[$contador1]->getNombre() == $datos[$contador2])
                {
                    $repeticiones++;
                    $numero_repetido = $datos[$contador1]->getNombre();
                }
                $contador2++;
            }
            $contador1++;
        }
        return $numero_repetido;
    }