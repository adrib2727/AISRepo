<?php
    require "clase/clase_nombres.php";

    session_start();
    $is = $_SESSION['indiceSesion']; //Indice del array sesión.

    if(!empty($_POST['nombre']))
    {
        $nom = new Nombres($_POST['nombre'])
    }

    if($_POST['nombre'] == "terminar"){
        header("Location:sesion3.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número primo</title>
</head>
<body>
    <form action="sesion2.php" method="post">
        Introduce un nombre:
        <input type="text" name="nombre" placeholder="Escribe un nombre">
        <input type="submit" value="Enviar nombre">
    </form>
</body>
</html>