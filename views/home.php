<?php session_start(); ?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/Projeto/vendors/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Projeto/assets/css/home.css">
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
        <a  class="text-navBar" href="/Projeto/views/about-brasil-jr.php">QUEM SOMOS <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class=" text text-navBar" href="/Projeto/views/partners.php">PARCEIROS</a>
      </li>
      <li class="nav-item">
        <a class="text text-navBar" href="/Projeto/views/contacts.php">FALE COM A GENTE</a>
      </li>
    </ul>
    <a href="/Projeto/home/login">
    <button id="button-enter" class="btn btn-enter mr-3" >ENTRAR</button> 
    </a>
    <a href="/Projeto/home/register">
    <button id="button-register"class="btn btn-register my-2 my-sm-0" type="submit">REGISTRAR</button>
    </a>
   
  </div>
</nav>
    <!--
    <br>
    -->
    <div class="container-background">
      <img class="img-background" src="/Projeto/assets/img/image-background.png">
      <div class="container-info">
        <p class="p1">
        Formar empreendedores <br/> comprometidos e capazes <br/> de transformar o Brasil
        </p>

        <p class="p2">
        Nosso compromisso, nossa razão de existir, <br/>a marca que queremos deixar no mundo.
        </p>

        <button type="button" class="btn btn-conteiner" >Conheça mais</button>
      </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>