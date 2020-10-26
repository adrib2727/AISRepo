<?php
    class Nombres{
        private $nombre;

        function __construct($nombre){
            $this->nombre = $nombre;
        }

        //Getters
        public function getNombre(){
            return $this->nombre;
        }

        //Setters
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function __toString()
        {
            return "Persona: ".$this->nombre;
        }
    }
?>