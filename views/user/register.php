<?php

use controllers\UserController;

session_start();
include_once "../../controllers/UserController.php";
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/Projeto/vendors/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Projeto/assets/css/register-page.css">
</head>

<body>
    <div class="container first-container mx-auto">
        <div>
            <h1 class="h1">
                Registrar uma nova conta
            </h1>
            <img src="/Projeto/assets/img/logo-brasil-junior.png" class="img-brasil-junior">
        </div>

        <form action="/Projeto/user/register" method="POST" name="register">
            <div class="form-group">
                <label class="ajust-label">Nome </label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label class="ajust-label">Email </label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label class="ajust-label">Senha</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-enter" value="register">Registrar</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>