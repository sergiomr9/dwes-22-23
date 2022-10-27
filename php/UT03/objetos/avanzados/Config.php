<?php

    class Config
    {
        public $nombre;
        private static $instance;

        public function setNombre(string $nombre){
            $this->nombre = $nombre;
        }
        public function getNombre():string{
            return $this->nombre;
        }

        //metodo singleton
        public static function singleton(){
            if (!isset(self::$instance)) {
                self::$instance = new Config();
            }
            return self::$instance;
        }

        private function __construct() {}

        /*public function dimeNombre(){

        }*/
    }
    

?>