<?php

namespace Library\Model;

abstract class Model
{

    private $database;
    protected $table;
    protected $primary;

    public function __construct($connexionName = null)
    {
    }

}

?>