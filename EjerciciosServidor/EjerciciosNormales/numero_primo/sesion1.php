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
        Escribe un número:
        <input type="text" name="numero" placeholder="Escribe un número">
        <input type="submit" value="Enviar número">
    </form>
</body>
</html>