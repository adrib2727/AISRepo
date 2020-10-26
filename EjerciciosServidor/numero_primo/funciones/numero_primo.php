<?php 
    function numero_primo($datos, $longitud)
    {
        $cont1 = 0;
        $cont2 = 1;
        $contador = 0;

        while($cont1 <= $longitud)
        {
            while($cont2 <= $longitud)
            {
                if($datos[$cont1]%$cont2 == 0)
                {
                    $cont1++;
                }
                $cont2++;
            }
            if($cont1 == 2)
            {
                echo $datos[$cont1]."<br>";
            }
            $cont1++;
        }
        return $cont1;
    }
?>