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
  <title>Conheça a Brasil Júnior</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="/Projeto/index.php">
      <img src="/Projeto/assets/img/logo-brasil-junior.png" width="101" height="74" class="d-inline-block align-top" alt="">
    </a>

    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="text-navBar" href="/Projeto/views/about-brasil-jr.php">QUEM SOMOS <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="text-navBar" href="/Projeto/views/about-mej.php">CONHEÇA A MEJ<span class="sr-only">(current)</span></a>
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
  <section id="apresentation">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex container-teamwork">
          <div class="position-relative justify-content-start">
            <img src="/Projeto/assets/img/image-conheca-bj.png" width="421" height="352" class="img-fluid" style="margin-left: -30px" alt="">
          </div>
          <div class="position-absolute align-self-center">
            <h1 style="font-size: 32px; color: #fff; margin-top:-40px">
              CONHEÇA A <br /> BRASIL JÚNIOR
            </h1>
          </div>
        </div>
        <div class="col-md-6 d-flex">
          <div class="align-self-center">
            <h1 class="h1-o-que">
              O QUE NOS TORNA ÚNICOS
            </h1>
            <p class="p-representar">
              "Representar e potencializar o Movimento Empresa <br />
              Júnior brasileiro como agente de formação de <br />
              empreendedores comprometidos e capazes de <br />
              transformar o país"
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="sections" id="about">
    <div class="container mx-auto">
      <div class="row">
        <div class="col-md d-flex flex-column">
          <div class="justify-content-center">
            <h1 class="h1-nossas-rea">NOSSAS REALIZAÇÕES</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container mx-auto mt-5">
      <div class="row">
        <div class="col-md-4 d-flex">
          <div class="mt-2 mr-2">
            <img src="/Projeto/assets/img/products/enej.png" style="margin-top: 10px" alt="">
            <p class="p-products" style="margin-top:22px">
              Resultado de um sonho do movimento, <br> o Encontro
              Nacional de Empresas Juniores foi realizado pela
              primeira vez em 1993 e até hoje continua inspirando
              e formando melhores <br> empresários juniores.
              Com o objetivo de <br> conectar, e potencializar os resultados
              do Movimento Empresa Júnior brasileiro, o ENEJ
              transitou por diversos estados do país e nunca
              deixou, apesar da grandiosidade do projeto. <br />
            </p>
          </div>
        </div>
        <div class="col-md-4 d-flex">
          <div class="mt-2 mr-2">
            <img src="/Projeto/assets/img/products/comunidade-pos-junior.png" alt="">
            <p class="p-products" style="margin-top:14px">
              Será que estamos mesmo transformando o <br />
              Brasil? Já imaginou conhecer os pós-juniores<br />
              de todo o país e poder se conectar com todos<br />
              eles em uma comunidade? Esse é o convite<br />
              para gerar maiores benefícios para nossa rede,<br />
              criando a conexão dos pós-juniores com o<br />
              mercado, com o MEJ e muito mais!
            </p>
          </div>
        </div>
        <div class="col-md-4 d-flex">
          <div class=" mt-2 mr-2">
            <img src="/Projeto/assets/img/products/encontro-de-lideres.png" alt="">
            <p class="p-products" style="margin-top: 15px">
              Um momento de conexão com todos os <br />
              líderes que conduzirão o futuro do MEJ. <br />
              Autoconhecimento, inspiração, construção<br />
              e conhecimento para crescer. Este é<br />
              o chamado para os inconformados que<br />
              transformarão o nosso país!
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container mx-auto mt-5">
      <div class="row justify-content-center">
        <div class="col-md-5 d-flex">
          <div class="mt-2 mr-2">
            <img src="/Projeto/assets/img/products/selo-ej.png" style="margin-top: 10px" alt="">
            <p class="p-products" style="margin-top:14px">
              O Selo EJ e o Selo Federação são produtos da Brasil Júnior <br>
              que tem o objetivo de resguardar a rede contra problemas <br>
              jurídicos e fiscais básicos, além de assegurar a preservação <br>
              do conceito nacional de Empresa Júnior e a observância <br>
              da Lei nº 13.267/16.
            </p>
          </div>
        </div>
        <div class="col-md-5 d-flex">
          <div class="mt-2 mr-2">
            <img src="/Projeto/assets/img/products/suporte-a-federacoes.png" alt="">
            <p class="p-products" style="margin-top:14px">
              Buscando impulsionar o impacto do Movimento Empresa <br>
              júnior nos estados brasileiros, catalisamos os resultados <br>
              das federações por meio de acompanhamento periódico, <br>
              treinamentos, visitas, banco de práticas e cocriação <br>
              de produtos.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <img src="/Projeto/assets/img/forms-irregular/form-10.png" style="margin-left:-50px" alt="">
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>