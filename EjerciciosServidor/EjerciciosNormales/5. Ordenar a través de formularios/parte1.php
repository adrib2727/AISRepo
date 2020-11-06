<?php
    /*Creamos un array $_SESSION: Dentro de $_SESSION se crea la variable ind (Índice), antes
    inicializamos la sesión, el array se podrá utilizar en cualquier página, después se le asigna una 
    variable local al array $_SESSION.*/

    session_start();
    $_SESSION['ind'] = 0; //Inicializamos la variable SESSION en 0 (Que en verdad es un array).

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento 1</title>
</head>
<body>
    <form action="parte2" method="post">
        <input type="text" name="num_introd"/>
        <input type="submit" value="enviar"/>
    </form>
</body>
</html>
    