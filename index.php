<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imgs/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="styled.css">
    <link rel="stylesheet" href="owe-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owe-carousel/owl.theme.default.min.css">

    <!-- responsividade -->
    <link rel="stylesheet" href="responsive.css">
    <!-- <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> -->
    <!--        
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>NetFlix Clone</title> -->
</head>

<body>
<!--Cabeçalho-->
<header>
    <div class="container">
        <img class="logo" src="imgs/netflix_logo.png" alt="logo"/>
        <nav>
            <a href="#">Início</a>
            <a href="#filmes">Filmes</a>
            <a href="#series">Séries</a>
            <a href="#infantil">Infantil</a>
            <a href="#doc">Documentários</a>
        </nav>
    </div>
</header>

<!--Pagina Principal  -->
<main>
    <div class="filme-principal">
        <div class="container">
            <h3 class="titulo">Assalto ao Banco da Espanha</h3>
            <p class="descricao">
                Thom Laybrick é um jovem e brilhante engenheiro que dificilmente se atrai pelos projetos em que é
                chamado a participar. Mas ele diz sim quando o caçador de tesouros Walter o convida para se unir
                a um grupo de contraventores que pretendem realizar um assalto ao Banco da Espanha. Calculado em
                cada detalhe, o roubo se torna uma incessante luta contra o tempo para que consigam se dar bem em
                meio à Copa do Mundo em que a Espanha disputa a final.</p>
            <div class="btns">
                <a class="btn-info" href="http://www.themoviedb.org/movie/630004-the-vault" target="_blank"><i
                            class="fas fa-play" aria-hidden="true"></i> ASSISTIR
                    AGORA
                </a>
                <a class="btn-info" href="https://www.themoviedb.org/movie/630004-the-vault/releases" target="_blank"><i
                            class="fas fa-info-circle"></i> MAIS INOFORMAÇÕES</a>
            </div>
        </div>
    </div>
</main>

<!--Carrossel 1 = Filmes-->
<div classe="carrossel-filmes">
    <div class="owl-carousel owl-theme">
        <?php

        for ($f = 0; $f < 16; $f++) {
            echo "<div class=\"item\">
                            <img id=\"filmes\" class=\"box-filme\" src=\"imgs/filmes/img" . ($f + 1) . ".jpg\" alt=\"img\">
                             </div>";
        }
        ?>
    </div>
</div>

<!--carrossel 2 = Séries-->
<div classe="carrossel-filmes">
    <div class="owl-carousel owl-theme">
        <?php
        for ($s = 0; $s < 15; $s++) {
            echo "<div class=\"item\">
                            <img id=\"series\" class=\"box-filme\" src=\"imgs/series/img" . ($s + 1) . ".jpg\" alt=\"img\">
                        </div>";
        }
        ?>
    </div>
</div>

<!--Carrossel 3 = Infantil-->
<div classe="carrossel-filmes">
    <div class="owl-carousel owl-theme">
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "<div class=\"item\">
                            <img id=\"infantil\" class=\"box-filme\" src=\"imgs/infantil/img" . ($i + 1) . ".jpg\" alt=\"img\">
                        </div>";
        }
        ?>
    </div>
</div>

<!--Carrossel 4 =   Documentários-->
<div classe="carrossel-filmes">
    <div class="owl-carousel owl-theme">
        <?php
        for ($d = 0; $d < 9; $d++) {
            echo "<div class=\"item\">
                            <img id=\"doc\" class=\"box-filme\" src=\"imgs/doc/img" . ($d + 1) . ".jpg\" alt=\"img\">
                        </div>";
        }
        ?>
    </div>
</div>

<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/setup.js"></script>


</body>

</html>