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
/*
    //Tableau des differentes cnx (objets PDO)
    private static $connexions;

    public static function connectDB($host = DB_HOST, $dbname = DB_NAME, $user = DB_USER, $pass = DB_PASSWORD, $char = DB_CHARSET
    )
    {

        $database = new \PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);

        $database->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
        $database->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $database->exec("SET CHARACTER SET $char");
        return $database;
    }

    public static function addConnexion($connexionName, $objectPDO)
    {
        self::$connexions[$connexionName] = $objectPDO;
    }

    public static function getConnexion($connexionName)
    {
        return self::$connexions[$connexionName];
    }
*/
}

?>