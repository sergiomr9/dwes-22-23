<?php

    class  Circulo
    {
        private $radio;
        public const PI=M_PI;

        public function setRadio(float $radio){
            $this-> $radio = $radio;
        }

        public function getRadio(): float{
            return $this->radio;
        }

        public function getArea(): float{
            return $area = self::PI * ( pow($this->radio,2));
        }

    }
    

?>