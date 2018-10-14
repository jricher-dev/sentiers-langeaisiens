<?php

namespace Library\Loader;

class Autoloader
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

    private static $_basePath = NULL;

    public static function setBasePath($value)
    {
        self::$_basePath = $value;
    }

    public function __construct()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    protected static function autoload($class)
    {
        if (is_null(self::$_basePath)) {
            trigger_error('basePath' . __CLASS__ . 'is null', E_USER_ERROR);
        }
        $pathFile = self::$_basePath . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
        require_once($pathFile);
    }
}
?>