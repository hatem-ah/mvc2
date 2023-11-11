<?php
// public/index.php
require_once __DIR__ . '/app/controllers/UserController.php';
require_once __DIR__ .'/app/models/UserModel.php';
require_once __DIR__ .'/config/config.php';
require_once __DIR__ . '/lib/DB/MysqliDb.php';




$config = require 'config/config.php';
$db = new MysqliDb(
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']
);
$request= $_SERVER['REQUEST_URI'];
//var_dump($request);
define('BASE_PATH', "/darrbeni/mvc/");
use userM\UserModel;
use userC\UserController;
$model = new UserModel($db);
$controller = new UserController($model);

switch($request)
{
    case BASE_PATH:
        $controller->index();
        break;
    case BASE_PATH."addForm":
        $controller->insertForm();
        break;
    case BASE_PATH . "add":
        $controller->createUser();
        break;
    case BASE_PATH."editForm?id=".$_GET['id']."":
        $controller->updateForm();
        break;
    case BASE_PATH. "edit?id=" . $_GET["id"] . "":
        $controller->update();
        break;
    
    default:
        echo "action not found";
        break;
}

var_dump($request);
 /*
switch($request){
    case BASE_PATH:
        $controller->index();
        break;
        case BASE_PATH.'addForm':
        $controller->insertForm();
        break;
        
        case BASE_PATH.'add':
        $controller->createUsers();
        break;
      //  var_dump( $id);
        case BASE_PATH." editForm?id=".$_GET['id']."":
        $controller->updateForm();
        
        break;
        case BASE_PATH. " edit?id=" . $_GET["id"] . "":
        $controller->update();
        break;
        var_dump(  $_GET['id']);

}*/
/*
if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    echo "Action not found!";
}*/
?>
