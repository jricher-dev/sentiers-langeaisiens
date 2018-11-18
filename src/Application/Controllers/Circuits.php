<?php

namespace Application\Controllers;

class Circuits extends \Library\Controller\Controller
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

    public function circuitsBalises()
    {
        $this->setDataView(array('pageTitle' => 'Home - Index'));
    }

    public function tracesGPS()
    {
        $this->setDataView(array('pageTitle' => 'Home - Index'));
    }
}
?>