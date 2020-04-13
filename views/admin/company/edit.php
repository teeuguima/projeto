<?php 
    //require_once "../../../dataBase/Connection.php";
    //require_once "../../../models/User.php";
   // require_once "../../../controllers/UserController.php";
    use controllers\UserController;
    UserController::verifyLogin();    
?>


<html>
    <form action="/Projeto/company/udpate" method="post">
        <input name="name" value="<?php echo $company->getName()?>" placeholder="name">
        <input name="federation" value="<?php echo $company->getFedaration()?>" placeholder="federation">          
        <button type="submit"> Salvar </button>
    </form>
</html>