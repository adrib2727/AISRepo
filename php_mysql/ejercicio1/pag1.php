<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php   
    /*Creación de la conexión a la base de datos*/
    $direccion_bd = "localhost";
    $nombre_db = "empresa";
    $usuario_db = "root";
    $clave_db = "Mysql27";

    $conexion = mysqli_connect($direccion_bd, $usuario_db, $clave_db, $nombre_db); //Creación total de la con.

    $consulta = "SELECT nombre FROM usuarios WHERE Clave=1234";

    $resultado_cons = mysqli_query($conexion, $consulta);

    $fila1 = mysqli_fetch_row($resultado_cons);
    $fila2 = mysqli_fetch_row($resultado_cons);

    echo $fila1[0]."<br>";
    echo $fila2[0];    
?>
