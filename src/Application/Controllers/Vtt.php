<?php

namespace Application\Controllers;

class Vtt extends \Library\Controller\Controller
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

    public function agenda()
    {
        $this->setDataView(array('pageTitle' => 'Home - Index'));
    }

    public function photos()
    {
        $this->setDataView(array('pageTitle' => 'Home - Index'));
    }
}

?>