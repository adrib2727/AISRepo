<?php
    session_start();
    $indice = $_SESSION['indice'];
    
    if(!empty($_POST['num_letra_palabra']))
    {
        $_SESSION['num_letra_palabra'.$indice] = $_POST['num_letra_palabra'];
        $indice++;
        $_SESSION['indice'] = $indice;
    }

    if($_POST['num_letra_palabra'] < 0)
    {
        header("Location:parte3.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdución de notas</title>
</head>
<body>
    <form action="parte2.php" method="post">
        <input type="text" name="num_letra_palabra"/><br>
        <input type="text" value="enviar"/>
    </form>
</body>
</html>
