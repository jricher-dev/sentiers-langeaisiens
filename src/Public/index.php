<?php

require_once('../Library/Loader/Autoloader.php');

$autoload = \Library\Loader\Autoloader::getInstance();

$autoload::setBasePath(str_replace('Public', '', __DIR__));

//Chargement des Settings (constantes)
\Application\Configs\Settings::getInstance();
/*
$DB = \Library\Model\Connexion::getInstance();
$DB::addConnexion("localhost", $DB::connectDB());
*/

$router = \Library\Router\Router::getInstance();

$router::dispatchPage(explode('/', $_GET['page']));
?>