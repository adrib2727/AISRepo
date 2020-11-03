<?php
    session_start();
    if(!empty($_POST["numero"])){

        if(!isset($_SESSION["indice"])){
            $_SESSION["indice"] = 0;
            $ind = $_SESSION["indice"];
            $_SESSION["numero".$ind] = $_POST["numero"];
        }else{
            $_SESSION["indice"]++;
            $ind = $_SESSION["indice"];
            $_SESSION["numero".$ind] = $_POST["numero"];
        }
    }
    if($_POST["numero"] <= 0){
        header("location: resolver.php");
    }

?>