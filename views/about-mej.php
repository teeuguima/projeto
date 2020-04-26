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
    <link rel="stylesheet" href="/Projeto/assets/css/about-mej-page.css">
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
                <img src="/Projeto/assets/img/image-conheca-mej.png" class="img-responsive" style="margin-left: -25px" alt="">
                <div class="container" style="position: relative; margin-top:-260px; margin-left:96px">
                    <h1 style="font-size: 38px; color: #fff">
                        CONHEÇA O <br /> MEJ
                    </h1>
                </div>
            </div>
            <div class="col-xl" style="position: relative">
                <img src="/Projeto/assets/img/forms-irregular/form-11.png" class="img-responsive" style="float: right; margin-right: -207px" alt="">
                <div class="container" style="position: absolute; margin-top:170px">
                    <h1 class="h1-mej">
                        MOVIMENTO <br>
                        EMPRESA JÚNIOR
                    </h1>
                    <p class="p-nossa-missao">
                        Nossa missão é formar, por meio da vivência empresarial,<br>
                        empreendedores comprometidos e capazes <br>
                        de transformar o Brasil. <br> <br>

                        Desde 2010, o MEJ já impactou mais de R$ 70.000.000,00 <br>
                        na economia brasileira, que são integralmente <br>
                        reinvestidos na educação empreendedora <br>
                        dos estudantes.
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid mx-auto" style="padding-left: 70px">
            <h1 class="h1-propositos" style="margin-left: 30px">
                PROPÓSITOS
            </h1>
            <div class="row">
                <div class="col-md" style="padding-left: 100px; margin-top: 10px">
                    <h1 class="h1-titles">
                        VISÃO
                    </h1>
                    <p class="p-definition">
                        Mais fortes e conectados, em todo Brasil, <br>
                        formando líderes que fazem mais <br>
                        projetos de alto impacto.
                    </p>
                </div>
                <div class="col-md mx-auto" style="margin-top: 10px">
                    <h1 class="h1-titles">
                        MISSÃO
                    </h1>
                    <p class="p-definition">
                        Formar por meio da vivência empresarial <br>
                        empreendedores comprometidos e <br>
                        capazes de transformar o Brasil. <br>
                    </p>
                </div>
            </div>
        </div>

        <div class="container-md" style="padding-top:30px; padding-left:70px;">
            <h1 class="h1-propositos" style="margin-left: 30px">
                VALORES
            </h1>
            <div class="row">
                <div class="col-md" style="padding-left: 100px; margin-top: 10px">
                    <h1 class="h1-titles">
                        ORGULHO SER MEJ
                    </h1>
                    <p class="p-definition">
                        Somos apaixonados pelo nosso propósito <br>
                        e trabalhamos por um movimento <br>
                        em que acreditamos.
                    </p>

                    <h1 class="h1-titles">
                        SINERGIA
                    </h1>
                    <p class="p-definition">
                        A despeito de nossa diversidade, somos <br>
                        unidos por visões compartilhadas e <br>
                        trabalhamos em cooperação. <br>
                    </p>

                    <h1 class="h1-titles">
                        TRANSPARÊNCIA
                    </h1>
                    <p class="p-definition">
                        Temos plena consciência que um futuro <br>
                        melhor se faz com ética e compromisso br
                        com a verdade.
                    </p>
                </div>
                <div class="col-md" style="margin-top: 10px">
                    <h1 class="h1-titles">
                        POSTURA EMPREENDEDORA
                    </h1>
                    <p class="p-definition">
                        Inconformismo, visão, pensamento inovador e <br>
                        capacidade de realização são características <br>
                        que nos definem.
                    </p>
                    <h1 class="h1-titles">
                        COMPROMISSO COM RESULTADO
                    </h1>
                    <p class="p-definition">
                        Buscamos gerar valor para nossas partes interessadas <br>
                        e nos comprometemos com a superação <br>
                        das suas expectativas.
                    </p>

                </div>
            </div>
        </div>


        <div class="container">
            <img src="/Projeto/assets/img/forms-irregular/form-12.png" style="margin-left:-50px" alt="">
        </div>

</body>

</html>