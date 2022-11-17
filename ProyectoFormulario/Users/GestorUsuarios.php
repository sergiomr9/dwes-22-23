<?php 

namespace Users;
class GestorUsuarios{
    //private static $lista = [];
    private static $instance;

    protected const LNAME = 25;
    protected const LUSER = 15;
    protected const LPASS = 64;

    public static function singleton() {
        if(!isset(self::$instance)) {
            self::$instance = new \Users\GestorUsuarios();
        }
        return self::$instance;
    }

    
}

?>