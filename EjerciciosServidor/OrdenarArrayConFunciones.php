<?php
    function main()
    {
        $array1 = array(56,12,43,7,2);
        $longitud = count($array1) - 1;

        $fun1 = numero_maximo($array1, $longitud);
        $fun2 = intercambio_datos($array1, $posicion, $longitud);
    }

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