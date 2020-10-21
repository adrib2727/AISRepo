<?php
    session_start();
    $_SESSION['ind'] = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducir número en array</title>
</head>
<body>
    <form action="011.php" method="post">
    Introduce números positivos al Array.<br>
        <input type="text" name="introd_num"><br>
        <input type="submit" value="Enviar dato" placeholder="Introduce aquí el número">
    </form>
</body>
</html>