<?php   
    require "clases/clase_persona.php";

    session_start();
    $indice_princ = $_SESSION['indice'];

    /*Si los datos que se han posteado no están vacíos...*/
    if(!empty($_POST['introd_dni']) && !empty($_POST['introd_nombre']) && 
    !empty($_POST['introd_apellido']) && !empty($_POST['introd_edad'])
    && !empty($_POST['introd_oficio']))
    {
        $per = new Persona($dni, $nombre, $apellido, $edad, $oficio);
        $_SESSION['persona'.$indice_princ] = $per;
        
        $indice_princ++;
        $_SESSION['indice'] = $indice_princ;
    }

    if($_POST['introd_dni'] < 0) //Si pongo menos de 0 en el DNI, el if se ejecuta y deja de ir al HTML.
    {
        header("Location:sesion3.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenador de personas</title>
    <style>
        body{
            background-color: brown;
        }
    </style>
</head>
<body>
    <h1>Escribe tus credenciales</h1>
    <form action="sesion2.php" method="post">
        <label for="datos">
            <input id="dni" type="text" name="introd_dni" placeholder="Introduce el DNI"><br>
            <input id="nombre" type="text" name="introd_nombre" placeholder="Introduce el nombre"><br>
            <input id="apellido" type="text" name="introd_apellido" placeholder="Introduce el apelllido"><br>
            <input id="edad" type="text" name="introd_edad" placeholder="Introduce la edad"><br>
            <input id="oficio" type="text" name="introd_oficio" placeholder="Introduce el oficio"><br>
        </label>
        <br>
        <input id ="datos" type="submit" value="Enviar datos">
    </form>
</body>