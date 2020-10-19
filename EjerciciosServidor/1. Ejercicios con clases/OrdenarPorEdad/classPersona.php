<?php
    class Persona{
        private $dni;
        private $nombre;
        private $apellido;
        private $edad;

        function __construct($dni, $nombre, $apellido, $edad){
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->edad = $edad;
        }

        //Getters
        public function getEdad(){
            return $this->edad;
        }

        public function __toString()
        {
            return "Persona: ".$this->dni." ".$this->nombre." ".$this->apellido." ".$this->edad;
        }
    }
?>

    