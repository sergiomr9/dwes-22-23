<?php 
    trait XYZ
    {
        //atributos
        private $x;
        private $y;
        private $z;
        //sett getter
        //x
        public function setX(float $x){
            $this->x = $x;
        }
        public function getX():float{
            return $this->x;
        }
        //y
        public function setY(float $y){
            $this->x = $y;
        }
        public function getY():float{
            return $this->y;
        }
        //z
        public function setZ(float $z){
            $this->x = $z;
        }
        public function getZ():float{
            return $this->z;
        }

        //metodos
        public function calcularXYZ(){
            echo "la posicion del ".$this->x.$this->y.$this->z;
        }
    }
?>