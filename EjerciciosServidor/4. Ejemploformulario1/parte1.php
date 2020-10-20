<?php
    session_start();
    $_SESSION['indice'] = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="parte2.php" method="post"></form>
            Introducir letras, números y palabras:
            <input type="text" name="num_letra_palabra"></input><br>
            <input type="submit" value="enviar"></input>
        </form>
</body>
</html>