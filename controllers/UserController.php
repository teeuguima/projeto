<?php




class UserController{
    private $user;

    public function __construct(){
        $this->user = new User;
    }
        
    public function check(){
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
            header("Location:/Projeto/views/admin/dashboard.php");
        }
    }

    public function register(){
        $this->user->setName($_POST['name']);
        $this->user->setEmail($_POST['email']);
        $this->user->setPassword($_POST['password']);
        $insert = $this->user->register();
/*
        if (mysqli_num_rows($insert)<=0) {
            echo "<script>alert('Não foi possível cadastrar esse usuário');history.back();</script>";
        } else {
            echo "<script>alert('Usuário cadastrado com sucesso!'); </script>";
            $this->verifyRegister();
        }*/
    }

    public static function verifyLogin(){
        session_start();
        if(isset($_SESSION['user'])== false){
          session_destroy();
          header("Location:/Projeto/views/user/login.php"); 
        }
    }
    public function verifyRegister(){
        header("Location:/Projeto/views/user/login.php");
    }

    public function logout(){
        session_start();
        session_destroy();
        header("Location:/Projeto/views/home.php");
    }
}
