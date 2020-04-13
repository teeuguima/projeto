<?php 

class HomeController{

    public function login(){
        header("Location:/Projeto/views/user/login.php");
    }

    public function index(){
        header("Location:/Projeto/views/home.php");
    }

    public function register(){
        header("Location:/Projeto/views/user/register.php");
    }
}