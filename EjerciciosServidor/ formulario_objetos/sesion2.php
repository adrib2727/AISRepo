<?php   
    require "clases/clase_persona.php";

    session_start();
    $i = $_SESSION['indice'];
    $per = 0;

    /*Si los datos que se han posteado no están vacíos...*/
    if(!empty($_POST['introd_dni']) && !empty($_POST['introd_nombre']) && 
    !empty($_POST['introd_apellido']) && !empty($_POST['introd_edad'])
    && !empty($_POST['introd_oficio']))
    {
        $per = new Persona(
        $dni = $_SESSION['introd_dni'.$i] = $_POST['introd_dni'],
        $nombre = $_SESSION['introd_nombre'.$i] = $_POST['introd_nombre'],
        $apellido  = $_SESSION['introd_apellido'.$i] = $_POST['introd_apellido'], 
        $edad = $_SESSION['introd_edad'.$i] = $_POST['introd_edad'], 
        $oficio = $_SESSION['introd_oficio'.$i] = $_POST['introd_oficio']);

        $_SESSION['persona'.$i] = $per;
        $i++;
        
        $_SESSION['indice'] = $i;
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
            background-color: skyblue;
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