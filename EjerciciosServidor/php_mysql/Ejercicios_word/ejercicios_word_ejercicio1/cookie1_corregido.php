<?php
    if(!isset($_COOKIE["idioma"])){
        setcookie("idioma", "castellano", time() + 3600 * 24);
        echo "Bienvenido al idioma en castellano";
    }else{
        $idioma_intr = $_POST["idioma"];
        setcookie("idioma",$idioma_intr, time() + 3600 * 24);
        echo "Bienvenido al idioma $idioma_intr";
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
    <form action="cookie1_corregido.php" method="post">
        <input type="text" name="idioma">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>