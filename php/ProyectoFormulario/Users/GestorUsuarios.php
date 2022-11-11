<?php
    namespace Users;
    class GestorUsuarios{
        private static $lista = [];
        private static $instance;

        public static function singleton() {
            if(!isset(self::$instance)) {
                self::$instance = new \Users\GestorUsuarios();
            }
            return self::$instance;
        }
        
    }
?>