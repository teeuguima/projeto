<?php
namespace controllers;

use User;

//session_start();


class UserController{
    private $user;

    private function __construct(){
        $this->user = new User;
    }
        
    public static function check(){
        $this->user->setEmail($_POST['email']);
        $this->user->setPassword($_POST['password']);

        $verify = $this->user->check();


        if(mysqli_num_rows(($verify)<=0)){
            echo"<script>
                alert('Login e/ou senha incorretos'); history.back();</script>";
                die();
        }else{
            //setcookie("email",$email);
            $_SESSION['user'] = $this->user->getEmail();
            header("Location:dashboard.php");
        }
    }

    public static function register(){
        $this->user->setName($_POST['name']);
        $this->user->setEmail($_POST['email']);
        $this->user->setPassword($_POST['password']);
        $insert = $this->user->register();

        if (mysqli_num_rows($insert)<=0) {
            echo "<script>alert('Não foi possível cadastrar esse usuário');history.back();</script>";
        } else {
            echo "<script>alert('Usuário cadastrado com sucesso!'); </script>";
            $this->verifyRegister();
        }
    }

    public static function verifyLogin(){
        session_start();
        if(isset($_SESSION['user'])== false){
          session_destroy();
          header("Location:login.php"); 
        }
    }
    public static function verifyRegister(){
        header("Location:login.php");
    }

    public static function logout(){
        session_start();
        session_destroy();
        header("Location:home.php");
    }
}
