<?php 

     class MagoOscuro extends Mago 
    {
        use xyz;
        public function atacar(){
            echo "ATAQUE DE SOMBRAAAAAAA!!!!!!";
        }
        public function defender(){
            parent::defender();
        }
    
    }
    

?>