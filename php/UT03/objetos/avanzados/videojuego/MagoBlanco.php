<?php 

     class MagoBlanco extends Mago 
    {
        use XYZ;
        public function atacar(){
            echo "ATAQUE DE LUUUUUUUUZ!ª!!!!1!!!!";
        }
        public function defender(){
            parent::defender();
        }
    }
    

?>