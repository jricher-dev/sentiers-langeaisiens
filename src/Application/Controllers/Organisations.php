<?php

namespace Application\Controllers;

class Organisations extends \Library\Controller\Controller
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

    public function randoGadoue()
    {
        $this->setDataView(array('pageTitle' => 'Home - Index'));
    }

    public function laDevalVerte()
    {
        $this->setDataView(array('pageTitle' => 'Home - Index'));
    }

    public function RandoTroglodytes()
    {
        $this->setDataView(array('pageTitle' => 'Home - Index'));
    }

    public function acces()
    {
        $this->setDataView(array('pageTitle' => 'Home - Index'));
    }
}

?>