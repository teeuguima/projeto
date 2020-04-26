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
  <div class="container">
    <div class="row">
      <div class="col-sm-5 container-teamwork">
        <img src="/Projeto/assets/img/image-conheca-bj.png" width="421" style="margin-left: -25px" height="352" alt="">
        <div style="position: relative; margin-top:-240px; margin-left:56px">
          <h1 style="font-size: 32px; color: #fff">
            CONHEÇA A <br /> BRASIL JÚNIOR
          </h1>
        </div>
      </div>
      <div class="col-sm">
        <h1 class="h1-o-que mx-auto">
          O QUE NOS TORNA ÚNICOS
        </h1>
        <p class="p-representar mx-auto">
          "Representar e potencializar o Movimento Empresa <br />
          Júnior brasileiro como agente de formação de <br />
          empreendedores comprometidos e capazes de <br />
          transformar o país"
        </p>
      </div>
    </div>
  </div>
  <div class="container mx-lg-auto">
    <div class="row">
      <div class="col mx-sm-5">
        <h1 class="h1-nossas-rea">NOSSAS REALIZAÇÕES</h1>
      </div>
    </div>
  </div>

  <div class="container-md" style="padding-top:30px">
    <div class="row">
      <div class="col-sm-4">
        <img src="/Projeto/assets/img/products/enej.png" style="margin-top: 10px" alt="">
        <p class="p-products" style="margin-top:22px">
          Resultado de um sonho do movimento, o Encontro <br />
          Nacional de Empresas Juniores foi realizado pela <br />
          primeira vez em 1993 e até hoje continua inspirando <br />
          e formando melhores empresários juniores.
          Com o <br /> objetivo de conectar, e potencializar os resultados <br />
          do Movimento Empresa Júnior brasileiro, o ENEJ <br />
          transitou por diversos estados do país e nunca
          deixou apesar da grandiosidade do projeto. <br />
        </p>
      </div>
      <div class="col-sm-4">
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
      <div class="col-sm-4">
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

  <div class="container mx-auto" style="padding-top:30px">
    <div class="row">
      <div class="col-md-5" style="margin-left: 110px">
        <img src="/Projeto/assets/img/products/selo-ej.png" style="margin-top: 10px" alt="">
        <p class="p-products" style="margin-top:14px">
          O Selo EJ e o Selo Federação são produtos da Brasil Júnior <br>
          que tem o objetivo de resguardar a rede contra problemas <br>
          jurídicos e fiscais básicos, além de assegurar a preservação <br>
          do conceito nacional de Empresa Júnior e a observância <br>
          da Lei nº 13.267/16.
        </p>
      </div>
      <div class="col-sm-5">
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
  <div class="container">
    <img src="/Projeto/assets/img/forms-irregular/form-10.png" style="margin-left:-50px" alt="">
  </div>

</body>

</html>