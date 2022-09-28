<?php

    class usuario {
        private $id;
        private $Marca;
        private $Modelo;
        private $Precio;

        public function __construct($id, $Marca, $Modelo, $Precio){
            $this->id = $id;
            $this->Marca = $Marca;
            $this->Modelo = $Modelo;
            $this->Precio = $Precio;
        }

        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id; 
        }
        public function setMarca($Marca){
            $this->Marca = $Marca;
        }
        public function getMarca(){
            return $this->Marca; 
        }
        public function setModelo($Modelo){
            $this->Modelo = $Modelo;
        }
        public function getModelo(){
            return $this->Modelo; 
        }
        public function setPrecio($Precio){
            $this->Precio = $Precio;
        }
        public function getPrecio(){
            return $this->Precio; 
        }
    }