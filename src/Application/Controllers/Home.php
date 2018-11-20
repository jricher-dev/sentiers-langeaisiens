<?php

namespace Application\Controllers;

class Home extends \Library\Controller\Controller
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

    public function liens()
    {
        $this->setDataView(array('pageTitle' => 'Home - Index'));
    }

    public function mentionsLegales()
    {
        $this->setDataView(array('pageTitle' => 'Home - Index'));
    }

    public function contact()
    {
        $emailSend = false;
        if (count($_POST) > 0) {
            $to = "narcotyk37@gmail.com";
            $from = $_POST['email'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $subject = $_POST['motif'];
            $message = "Message de : ". $_POST['nom'] . " " . $_POST['prenom'] . "<br>" . $_POST['message'];

            if ($this->sendEmailUtf8($to, $from, $subject, $message) == false) {
                $emailSend = true;
            }
        }
        $this->setDataView(array('emailSend' => $emailSend));
    }

    function sendEmailUtf8($to, $from_email, $subject = '(No subject)', $message = '')
    {
        $headers = 'From: ' . $from_email . "\r\n" .
        'Reply-To: ' . $from_email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
    }
}

?>