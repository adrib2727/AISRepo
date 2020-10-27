<?php
    class Nombres{
        private $nombre;
        private $repeticiones;

        function __construct($nombre){
            $this->nombre = $nombre;
            $this->repeticiones = $repeticiones;
        }

        //Getters
        public function getNombre(){
            return $this->nombre;
        }
        public function getRepeticiones(){
            return $this->repeticiones;
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