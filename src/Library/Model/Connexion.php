<?php

namespace Library\Model;

class Connexion
{

    private static $_instance = NULL;

    //Singleton
    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    private function __construct()
    {
        
    }
}

?>