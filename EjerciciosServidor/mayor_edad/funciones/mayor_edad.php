<?php
    function calcular_edad($datos, $longitud)
    {
        $cont1 = 0;

        while($cont1 <= $longitud)
        {
            if($datos[$cont1]->getEdad() > 18){
                $mayor_edad = $datos[$cont1]->getNombre();
                return $mayor_edad;
            }
            else{
                $menor_edad = $datos[$cont1]->getNombre();
                return $menor_edad;
            }
            $contador++;
        }
    }