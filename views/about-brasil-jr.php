<?php

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/Projeto/vendors/bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="/Projeto/assets/css/about-brasil-page.css">
  <title>Brasil Júnior</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="#">
      <img src="/Projeto/assets/img/logo-brasil-junior.png" width="101" height="74" class="d-inline-block align-top" alt="">

    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="text-navBar" href="/Projeto/views/about-brasil-jr.php">QUEM SOMOS <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class=" text text-navBar" href="/Projeto/views/partners.php">PARCEIROS</a>
        </li>
        <li class="nav-item">
          <a class="text text-navBar" href="/Projeto/views/contacts.php">FALE COM A GENTE</a>
        </li>
      </ul>
      <a href="/Projeto/home/login">
        <button id="button-enter" class="btn btn-enter mr-3">ENTRAR</button>
      </a>
      <a href="/Projeto/home/register">
        <button id="button-register" class="btn btn-register my-2 my-sm-0" type="submit">REGISTRAR</button>
      </a>

    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-sm container-teamwork">
        <h1 class="text-h1-first">
          Conheça a <br /> Brasil Júnior
        </h1>
      </div>
      <div class="col-sm">
        <h1 class="text-h1-second">
          O QUE NOS TORNA ÚNICOS
        </h1>
        <p class="text-representa">
          "Representar e potencializar o Movimento Empresa
          Júnior brasileiro como agente de formação de
          empreendedores comprometidos e capazes de
          transformar o país"
        </p>
        <img class="img-scroll" src="/Projeto/assets/img/scroll.png">
      </div>
    </div>
  </div>
  <div class="container-bg-enej">

  </div>

</body>

</html>