<?php
    session_start();
    $_SESSION['indiceSesion'] = 0;
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