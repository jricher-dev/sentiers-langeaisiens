<?php

namespace Library\Model;

abstract class Model
{

    private $database;
    protected $table;
    protected $primary;

    public function __construct($connexionName = null)
    {
        //$classConnexion = \Library\Model\Connexion::getInstance();
        //$this->database = $classConnexion::getConnexion($connexionName);
    }

}

?>