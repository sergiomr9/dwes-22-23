<?php 

     class MagoOscuro extends Mago 
    {
        use XYZ;
        public function atacar(){
            echo "ATAQUE DE SOMBRAAAAAAA!!!!!!";
        }
        public function defender(){
            parent::defender();
        }
    
    }
    

?>