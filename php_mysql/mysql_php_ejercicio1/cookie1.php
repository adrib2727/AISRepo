<?php
    if(!empty($_POST["idioma"])){
        $idioma_form = $_POST["idioma"];

        if(!isset($_COOKIE["idioma"])){ //Si la cookie no está establecida.
            setcookie("idioma","1", time() + 3600 * 24); //Crea una cookie empezando por el valor 1.
            echo "Bienvenido a la página por primera vez.";
        }else{
            if($idioma_form == "ingles"){
                $visitas = (int) $_COOKIE["idioma"];
                $visitas++; //Aumenta las visitas por cada vez que entra.
                setcookie("idioma",$visitas, time() + 3600 * 24);
                echo "Welcome to the web page for $visitas time";
            }else{
                echo "Este idioma no está registrado";
            }
            
        }
    }
    
