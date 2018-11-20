<?php

namespace Application\Controllers;

class Error extends \Library\Controller\Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    //affichage page d'erreur
    public function index($codeErreur = "404")
    {
        $this->setDataView(
                array(
                    'errNumber' => $codeErreur,
                    'errDescription' => 'Page Introuvable !',
                    'pageTitle' => "404 Not found"
        ));
    }

}

?>