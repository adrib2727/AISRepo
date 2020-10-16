<?php
    class Persona{
        private $dni;
        private $nombre;
        private $apellido;
        private $edad;

        function constructor($dni, $nombre, $apellido, $edad){
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->edad = $edad;
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

        public function ToString()
        {
            return "Persona: ".$this->dni."".$this->nombre."".$this->apellido."".$this->edad;
        }
    }
?>

    