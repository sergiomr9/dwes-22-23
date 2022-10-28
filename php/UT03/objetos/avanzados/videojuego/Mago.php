<?php 

    abstract class Mago implements Personaje
    {
        use XYZ;
        abstract public function atacar();
        public function defender(){
            echo "HECHIZO PROTECToooo000ooOOOOOOR!!!!!!!!";
        }
    }

?>