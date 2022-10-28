<?php 

    abstract class Mago implements Personaje
    {
        abstract public function atacar();
        public function defender(){
            echo "HECHIZO PROTECToooo000ooOOOOOOR!!!!!!!!";
        }
    }

?>