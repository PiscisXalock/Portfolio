<?php

require_once './config/default.php';
require_once DEFAULT_CONTROLLER;

$defaultController = new DefaultController();

if(!isset($_GET["controller"])) $_GET["controller"] = DEFAULT_CONTROLLER;
if(!isset($_GET["action"])) $_GET["action"] = DEFAULT_ACTION;

$controller_path = 'controller/'.$_GET["controller"].'.php';

if(!file_exists($controller_path) || is_null($controller_path)) $controller_path = 'controller/'.DEFAULT_CONTROLLER.'.php';

if(file_exists($controller_path)) require_once $controller_path;
$controllerName = ucfirst($_GET["controller"]).'Controller';
$controller = new $controllerName();

$dataToView["data"] = array();
if(method_exists($controller,$_GET["action"])) $dataToView["data"] = $controller->{$_GET["action"]}();

echo "Prueba";
//require_once $defaultController->header();
require_once $controller->view;
//require_once $defaultController->footer();

?>