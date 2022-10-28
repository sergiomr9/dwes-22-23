<?php 

    class Humano  implements Personaje
    {
        use XYZ;
        public function atacar(){
            echo "PEÑETASO";
        }
        public function defender(){
            echo "BLOQUEO";
        }
    }
    
?>