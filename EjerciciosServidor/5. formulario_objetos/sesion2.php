<?php   
    session_start();
    $indice_princ = $_SESSION['indice'];

    /*Si los datos que se han posteado no están vacíos...*/
    if(!empty($_POST['introd_dni']) && !empty($_POST['introd_nombre']) && 
    !empty($_POST['introd_apellido']) && !empty($_POST['introd_edad'])
    && !empty($_POST['introd_oficio']))
    {
        /*Los posteos se guardan como datos en el array $_SESSION, junto con su posición.*/
        $_SESSION['introd_dni'.$indice_princ] = $_POST['introd_dni'];
        $_SESSION['introd_nombre'.$indice_princ] = $_POST['introd_nombre'];
        $_SESSION['introd_apellido'.$indice_princ] = $_POST['introd_apellido'];
        $_SESSION['introd_edad'.$indice_princ] = $_POST['introd_edad'];
        $_SESSION['introd_oficio'.$indice_princ] = $_POST['introd_oficio'];

        $indice_princ++;
        $_SESSION['indice'] = $indice_princ;
    }

    if($_POST['introd_dni'] < 0)
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
</html>