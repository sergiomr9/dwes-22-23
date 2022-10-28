<?php

    /**
     * 
     */
    trait PesoDesc
    {

        private $peso;
        private $descripcion;

        public function setPeso(float $peso){
            $this->peso = $peso;
        }
        public function getPeso():float{
            return $this->peso;
        }
        public function setDescripcion(string $descripcion){
            $this->descripcion = $descripcion;
        }
        public function getDescripcion():string{
            return $this->descripcion;
        }
        function pintarDescripcion(){
            echo $this->descripcion;
        }
        function pintarPeso(){
            echo $this->peso;
        }
    }

    
    

?>