<?php

    class autos {
        private $id;
        private $Marca;
        private $Modelo;
        private $Precio;
        private $Dias;
        private $Total_precio;

        public function __construct($id, $Marca, $Modelo, $Precio, $Dias, $Total_precio){
            $this->id = $id;
            $this->Marca = $Marca;
            $this->Modelo = $Modelo;
            $this->Precio = $Precio;
            $this->Dias = $Dias;
            $this->Total_precio = $Total_precio;
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
        public function setDias($Dias){
            $this->Dias = $Dias;
        }
        public function getDias(){
            return $this->Dias; 
        }
        public function setTotal_precio($Total_precio){
            $this->Total_precio = $Total_precio;
        }
        public function getTotal_precio(){
            return $this->Total_precio; 
        }


    }