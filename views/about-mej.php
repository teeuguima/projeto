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
    <title>Conheça o MEJ</title>
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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5 d-flex">
                    <div class="position-relative">
                        <img src="/Projeto/assets/img/image-conheca-mej.png" class="img-fluid" style="margin-left: -25px" alt="">
                    </div>
                    <div class="position-absolute align-self-start" style="margin-left: 70px; margin-top:150px">
                        <h1 style="font-size: 38px; color: #fff">
                            CONHEÇA O <br /> MEJ
                        </h1>
                    </div>
                </div>
                <div class="col-md-5 d-flex">
                    <div class="align-self-center">
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
                <div class="col-md-2 d-flex d-md-none d-sm-none d-none d-lg-block">
                    <img src="/Projeto/assets/img/forms-irregular/form-11.png" style="float: right; margin-right: -207px" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto">
            <div>
                <h1 class="h1-propositos"> PROPÓSITOS </h1>
            </div>
            <div class="row flex-row">

                <div class="col-md-5 d-flex mt-3">
                    <div class="pl-5">
                        <h1 class="h1-titles">
                            VISÃO
                        </h1>
                        <p class="p-definition">
                            Mais fortes e conectados, em todo Brasil, <br>
                            formando líderes que fazem mais <br>
                            projetos de alto impacto.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 d-flex mt-3">
                    <div class="pl-5">
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
        </div>
        <div class="container mx-auto pt-2">
            <div>
                <h1 class="h1-propositos"> VALORES </h1>
            </div>
            <div class="row flex-row">

                <div class="col-md-5 d-flex flex-column mt-3">
                    <div class="pl-5">
                        <h1 class="h1-titles">
                            ORGULHO SER MEJ
                        </h1>
                        <p class="p-definition">
                            Somos apaixonados pelo nosso propósito <br>
                            e trabalhamos por um movimento <br>
                            em que acreditamos.
                        </p>
                    </div>
                    <div class="pt-3 pl-5">
                        <h1 class="h1-titles">
                            MISSÃO
                        </h1>
                        <p class="p-definition">
                            Formar por meio da vivência empresarial <br>
                            empreendedores comprometidos e <br>
                            capazes de transformar o Brasil. <br>
                        </p>
                    </div>

                    <div class=" pt-3 pl-5">
                        <h1 class="h1-titles">
                            SINERGIA
                        </h1>
                        <p class="p-definition">
                            A despeito de nossa diversidade, somos <br>
                            unidos por visões compartilhadas e <br>
                            trabalhamos em cooperação. <br>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column mt-3">
                    <div class="pl-5">
                        <h1 class="h1-titles">
                            POSTURA EMPREENDEDORA
                        </h1>
                        <p class="p-definition">
                            Inconformismo, visão, pensamento inovador e <br>
                            capacidade de realização são características <br>
                            que nos definem.
                        </p>
                    </div>
                    <div class="pt-3 pl-5">
                        <h1 class="h1-titles">
                            COMPROMISSO COM RESULTADO
                        </h1>
                        <p class="p-definition">
                            Buscamos gerar valor para nossas partes interessadas <br>
                            e nos comprometemos com a superação <br>
                            das suas expectativas.
                        </p>
                    </div>

                    <div class=" pt-3 pl-5">
                        <h1 class="h1-titles">
                            SINERGIA
                        </h1>
                        <p class="p-definition">
                            A despeito de nossa diversidade, somos <br>
                            unidos por visões compartilhadas e <br>
                            trabalhamos em cooperação. <br>
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <div class="container d-flex d-md-none d-sm-none d-none d-lg-block">
        <img src="/Projeto/assets/img/forms-irregular/form-12.png" style="margin-left:-50px" alt="">
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>