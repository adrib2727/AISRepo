<?php
    session_start();
    $indice = $_SESSION['ind'];

    if(!empty($_POST['introd_num']))
    {
        $_SESSION['introd_num'.$indice] = $_POST['introd_num'];
        $indice++;
        $_SESSION['ind'] = $indice;
    }

    if($_POST['introd_num'] < 0)
    {
        header("location:111.php");
    }
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