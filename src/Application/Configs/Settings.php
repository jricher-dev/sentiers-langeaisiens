<?php

namespace Application\Configs;

class Settings
{

    private static $_instance = NULL;

    public function __construct()
    {

        //in : gaming-store-mvc/src/Public/index.php
        //out : gaming-store-mvc/src/Public/
        define('WEB_ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));

        //in : http://localhost/gaming-store-mvc/src/Public/index.php
        //out : http://localhost/gaming-store-mvc/
        define('LINK_ROOT', str_replace('src/Public/index.php', '', 'http://'.$_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME']));


        //in : D:/wamp64/www/gaming-store-mvc/src/Public/index.php
        //out : D:/wamp64/www/gaming-store-mvc/src/Application/
        define('APP_ROOT', str_replace('Public/index.php', 'Application/', $_SERVER['SCRIPT_FILENAME']));

        //in : D:/wamp64/www/gaming-store-mvc/src/Public/index.php
        //out : D:/wamp64/www/gaming-store-mvc/src/Library/
        define('LIB_ROOT', str_replace('Public/index.php', 'Library/', $_SERVER['SCRIPT_FILENAME']));

        //in : D:/wamp64/www/gaming-store-mvc/src/Public/index.php
        //out : D:/wamp64/www/gaming-store-mvc/src/Public/
        define('PUB_ROOT', str_replace('index.php', '',  $_SERVER['SCRIPT_FILENAME']));

        //Parametres de la BDD
       /* define('DB_HOST', 'localhost');
        define('DB_NAME', 'sentierslangeaisien');
        define('DB_USER', 'root');
        define('DB_PASSWORD', 'root');
        define('DB_CHARSET', 'utf8');*/
    }

    //Singleton
    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

}

?>
