<?php 

    namespace Users;
    class Texto extends \Users\GestorUsuarios {
        private $nombre;
        public function __contruct($nombre, $longitud){
            //  asdfdsaf
        }
        public function pintar(){
            echo "<input type='text' name='$this->nombre' id='$this->nombre' size='$this->nombre'placeholder='Nombre' value='<?=$this->nombre?>'>";
        }
    }
    

?>