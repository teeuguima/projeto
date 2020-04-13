<?php 
    require_once "../../../dataBase/Connection.php";
    require_once "../../../models/User.php";
   // require_once "../../../controllers/UserController.php";
    use controllers\UserController;
    UserController::verifyLogin();    
?>


<html>
    <form action="/Projeto/company/erase" method="post">
        <input name="id" value="<?php echo $company->getId()?>" placeholder="name">
        <button type="submit"> Deletar </button>
    </form>
</html>