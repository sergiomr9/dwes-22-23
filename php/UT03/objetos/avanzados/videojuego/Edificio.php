<?php 

    class Edificio
    {
        use PesoDesc;
        //atributos
       /* private $altura;
        private $descripcion;
        //setter & getter */
            //altura
        public function setAltura(float $altura){
            $this->altura = $altura;
        }
        public function getAltura():float{
            return $this->altura;
        }
            //descripcion
        /*public function setDescripcion(string $descripcion){
            $this->descripcion = $descripcion;
        }
        public function getDescripcion():string{
            return $this->descripcion;
        }
        */
        //métodos
        public function pintarAltura(){
            echo "la altura del edificion es: ".$this->altura;
        }
        /*public function pintarDescripcion(){
            echo "la descripcion del edificio es: ".$this->descripcion;
        } */
    }

?>