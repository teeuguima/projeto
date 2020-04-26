<?php
/* require_once "../../dataBase/Connection.php";
    require_once "../../models/User.php";
    require_once "../../controllers/UserController.php";
   use controllers\UserController;
    UserController::verifyLogin();
    echo "Olá ".$_SESSION['user']; */

?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/Projeto/vendors/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Projeto/assets/css/dashboard-page.css">
    <title>Brasil Júnior</title>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>

    <body>
        <nav class="navbar navbar-dark fixed-top bg-white flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Painel administrativo</a>
            <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
        
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="#">Sair</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <span data-feather="home"></span>
                                    Dashboard <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img src="/Projeto/assets/img/clipboard.png" width="25" height="25" viewBox="0 0 24 24" class="feater feater-home ajust-icon">
                                    <span style="margin-left: 3px"></span>
                                    Cadastrar empresa
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img src="/Projeto/assets/img/teamwork.png" width="25" height="25" viewBox="0 0 25 25" class="feater ajust-icon">
                                    <span style="margin-left: 3px"></span>
                                    Listar empresas
                                </a>
                            </li>
                    </div>
                </nav>

                <main role="main" class="main-background col-md-9 ml-sm-auto col-lg-10 px-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                        <h1 class="h2">Cadastrar empresa</h1>
                    </div>


                    <form action="/Projeto/company/store" method="post">
                        <div class="form-group">
                            <label >Nome da empresa</label>
                            <input type="text" class="form-control" id="name"  placeholder="Exemplo: EcompJr">
                        </div>
                        <div class="form-group">
                            <label >Federation</label>
                            <input type="text" class="form-control" id="federation" placeholder="UNIJR-BA">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </main>
            </div>
        </div>
    </body>

</html>
<!-- <a href="/Projeto/user/logout">Sair</a>
<br>
<br>
<div>
    <a href="/Projeto/company/index">Listar empresas</a>
    <a href="/Projeto/company/create">Cadastrar empresa</a>
  <a href="/Projeto/company/edit">Editar empresa</a>
    <a href="/Projeto/company/delete">Excluir empresa</a> 
</div>-->