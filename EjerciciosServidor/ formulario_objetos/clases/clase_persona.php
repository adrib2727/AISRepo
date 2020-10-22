<?php
    class Persona{
        private $dni;
        private $nombre;
        private $apellido;
        private $edad;
        private $oficio;

        function __construct($dni, $nombre, $apellido, $edad, $oficio){
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->edad = $edad;
            $this->oficio = $oficio;
        }

        //Getters
        public function getDni(){
            return $this->dni;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function getEdad(){
            return $this->edad;
        }

        public function getOficio(){
            return $this->oficio;
        }

        //Setters
        public function setDni($dni){
            $this->dni = $dni;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function setEdad($edad){
            $this->edad = $edad;
        }

        public function setOficio($oficio){
            $this->oficio = $oficio;
        }


        public function __toString()
        {
            return "Persona: ".$this->dni." ".$this->nombre." ".$this->apellido." ".$this->edad." ".$this->oficio;
        }
    }
?>