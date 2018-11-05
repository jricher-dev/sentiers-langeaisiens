<?php

namespace Application\Controllers;

class Association extends \Library\Controller\Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    //permet d'afficher la page d'accueil
    public function index()
    {
        $this->setDataView(array('pageTitle' => 'Home - Index'));
    }

    public function presentation()
    {
        $this->setDataView(array('pageTitle' => 'Home - Index'));
    }
}

?>