<?php
    require_once "../../../dataBase/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    require_once "../../../models/Company.php";
    require_once "../../../controllers/CompanyController.php";
    use controllers\UserController;
    use controllers\CompanyController;
    UserController::verifyLogin();
?>


<?php
    $companys = CompanyController::all();
    foreach ($companys as $company) {
?>

<a href="/Projeto/company/edit/$company->getId()<?php echo $company->getId()?>">
<button>
<?php echo $company->getId()?>
editar
</button>
</a>

<a href="/Projeto/company/delete">
<button>
excluir
</button>
</a>


<?php
    echo $company->getName();
    echo " | ";
    echo $company->getFederation();
    echo "<br>";
}
?>