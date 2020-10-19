<?php
    if(is_numeric($_GET["num1"]) && is_numeric($_GET["num2"]))
    {
        $numero2 = $_GET["num1"];
        $numero1 = $_GET["num2"];
        $suma = $numero1 + $numero2;

        echo "La suma es: ".$suma;
    }
    else
    {
        if(empty($_GET["num1"]) || (empty($_GET["num2"])))
        {
            echo "Faltan palabras";
        }
        else
        {
            echo "Algún dato introducido no es numérico";
        }
    }
?>
