<?php 

    require_once "Router.php";
    require_once "dataBase/Connection.php";
    require_once "model/User.php";
    require_once "model/Company.php";
    require_once "controllers/UserController.php";
    require_once "controllers/HomeController.php";
    require_once "controllers/CompanyController.php";
   

    
    

    $router = new Router();
    $router->start($_GET);