<?php 
    require_once "../../dataBase/Connection.php";
    require_once "../../models/User.php";
    require_once "../../controllers/UserController.php";
    use controllers\UserController;
    UserController::verifyLogin();
    echo "Olá ".$_SESSION['user'];
    
?>
<a href="/Projeto/user/logout">Sair</a>

<br>
<br>
<div>
    <a href="/Projeto/company/index">Listar empresas</a>
    <a href="/Projeto/company/create">Cadastrar empresa</a>
 <!--   <a href="/Projeto/company/edit">Editar empresa</a>
    <a href="/Projeto/company/delete">Excluir empresa</a> -->
</div>