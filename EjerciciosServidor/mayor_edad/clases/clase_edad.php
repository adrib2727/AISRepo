<?php
    class Nombres{
        private $nombre;
        private $edad;

        function __construct($nombre, $edad){
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        //Getters
        public function getNombre(){
            return $this->nombre;
        }
        public function getEdad(){
            return $this->edad;
        }

        //Setters
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setEdad($edad){
            $this->edad = $edad;
        }

        public function __toString()
        {
            return "Persona: ".$this->nombre." ".$this->edad;
        }
    }
?>