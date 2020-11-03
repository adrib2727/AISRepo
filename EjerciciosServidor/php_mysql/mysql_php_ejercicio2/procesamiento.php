<?php

    $direccion_bd = "mysql:dbname=empresa;host=localhost";
    $usuario_db = "root";
    $clave_db = "Mysql27";

    if(!empty($_POST["codigo"])){

        $codigo_intr = $_POST["codigo"]; //Variable que asigno al post.

        $conexion = new PDO($direccion_bd, $usuario_db, $clave_db);
        echo "Conexión realizada con éxito"."<br>"."<br>";

        $consulta = "SELECT * FROM usuarios WHERE clave = $codigo_intr"; //Consulta
        $usuarios = $conexion->query($consulta);
        echo "Número de personas con dicho código: "."<br>";
        echo $usuarios->rowCount()."<br>"."<br>"; //Saca el número de datos que hay en la BD.

        foreach($usuarios as $row){
            print $row["Nombre"]."\t";
            echo "<br>";
            print $row["Clave"]."\t";
            echo "<br>";
        }
    }
?>