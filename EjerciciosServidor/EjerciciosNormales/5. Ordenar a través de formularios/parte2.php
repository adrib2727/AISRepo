<?php
    session_start();
    $indice = $_SESSION['ind'];

    /*Definición de $_POST: */
    if(!empty($_POST['num_introd']))
    {
        $_SESSION['num_introd'.$indice] = $_POST['num_introd'];
        $indice++;
        $_SESSION['ind'] = $indice;
    }

    if($_POST['num_introd'] < 0)
    {
        header("location:parte3.php");
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="parte2.php" method="post">    
        <input type="text" name="num_letra_palabra"/><br>
        <input type="text" value="enviar"/>
    </form>
</body>
</html>