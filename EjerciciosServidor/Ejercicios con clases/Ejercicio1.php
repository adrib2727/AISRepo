<?php
    class Persona{
        private $dni;
        private $nombre;
        private $apellido;

        function constructor($dni, $nombre, $apellido){
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
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

        public function ToString()
        {
            return "Persona: ".$this->dni."".$this->nombre."".$this->apellido;
        }

    }






?>