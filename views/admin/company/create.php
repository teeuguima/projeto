<?php 
    require_once "../../../dataBase/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    use controllers\UserController;
    use dataBase\Connection;
    UserController::verifyLogin();    
?>


<html>
    <form action="/Projeto/company/store" method="post">
        <input name="name" placeholder="name">
        <input name="federation" placeholder="federation">          
        <button type="submit"> Cadastrar </button>        
    </form>
</html>