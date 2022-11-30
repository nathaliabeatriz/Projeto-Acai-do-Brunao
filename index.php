<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Açaí do Brunão | Página Inicial</title>

    <!--Links para estilo-->
    <link rel="stylesheet" href="../estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!--Links para fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Baloo+2&family=Staatliches&display=swap"
        rel="stylesheet">

</head>

<body>
    <div>
        <?php
            include_once("header.php");
        ?>
        <div class="apresentacao-produtos">
            <div class="background-desenho produto-1">
                <img class="img-produto taca" src="Imagens/produtos/taça de açaí.png" alt="">
            </div>

            <div class="background-cor background-info-produto-1">
                <div class="info-produtos">
                    <h2 id="titulo-info-produto-1">Estilo</h2>
                    <p>Para você que quer fazer aquela foto bacana e causar inveja para os seus amigos nas redes
                        sociais, essa é a pedida! Com várias opções de taças decoradas, é impossível não ficar com água
                        na boca!
                    </p>
                </div>
            </div>
        </div>

        <div class="apresentacao-produtos">
            <div class="background-desenho produto-2">
                <img class="img-produto barca" src="Imagens/produtos/barca açaí.png" alt="">
            </div>
            <div class="background-cor background-info-produto-2">
                <div class="info-produtos">
                    <h2 id="titulo-info-produto-2">Variedade</h2>
                    <p>Pra que monotonia? Temos um cardápio completo de combinações e adicionais para o seu açaí!
                        Chocolates, mousses, frutas e dezenas de acompanhamentos! </p>
                </div>
            </div>
        </div>

        <div class="apresentacao-produtos">
            <div class="background-desenho produto-3">
                <img class="img-produto" src="Imagens/produtos/açaí-banana.png" alt="">
            </div>
            <div class="background-cor background-info-produto-3">
                <div class="info-produtos" style="color: black;">
                    <h2 id="titulo-info-produto-3">Qualidade</h2>
                    <p>Nosso açaí é feito com a melhor matéria prima, garantindo assim um sabor agradável e único! Seja
                        em formato de taça, copo ou
                        barca, o importante é se deliciar!
                    </p>
                </div>
            </div>
        </div>

        <div class="basic2">
            <h1 id="titulo">Complemente o seu açaí!</h1>
            <a href="#" class="prev">&lsaquo;</a>
            <div class="carousel">
                <ul>
                    <li><img src="Imagens/adicionais do açaí/abacaxi.png">
                        <p>Abacaxi <br>R$ 2,50</p>
                    </li>
                    <li><img src="Imagens/adicionais do açaí/amendoim.png">
                        <p>Amendoim<br>R$ 3,00</p>
                    </li>
                    <li><img src="Imagens/adicionais do açaí/maracujá.png">
                        <p>Maracujá<br>R$ 2,50</p>
                    </li>
                    </li>
                    <li><img src="Imagens/adicionais do açaí/coco ralado.png">
                        <p>Coco ralado<br>R$ 3,00</p>
                    </li>
                    </li>
                    <li><img src="Imagens/adicionais do açaí/ovomaltine.png">
                        <p>Ovomaltine<br>R$ 2,50</p>
                    </li>
                    </li>
                    <li><img src="Imagens/adicionais do açaí/aveia.png">
                        <p>Aveia<br>R$ 2,50</p>
                    </li>
                    </li>
                    <li><img src="Imagens/adicionais do açaí/doce de leite.png">
                        <p>Doce de leite<br>R$ 2,50</p>
                    </li>
                    </li>
                    <li><img src="Imagens/adicionais do açaí/castanha-de-caju.png">
                        <p>Castanha de caju<br>R$ 2,50</p>
                    </li>
                    </li>
                    <li><img src="Imagens/adicionais do açaí/farofa de amendoim.png">
                        <p>Farofa de amendoim <br>R$ 2,50</p>
                    </li>
                    </li>
                    <li><img src="Imagens/adicionais do açaí/limão.png">
                        <p>Limão<br>R$ 2,50</p>
                    </li>
                    </li>
                    <li><img src="Imagens/adicionais do açaí/manga.png">
                        <p>Manga<br>R$ 2,50</p>
                    </li>
                    </li>
                    <li><img src="Imagens/adicionais do açaí/paçoca.png">
                        <p>Paçoca<br>R$ 2,50</p>
                    </li>

                </ul>
            </div>
            <a href="#" class="next">&rsaquo;</a>
        </div>

        <br>
        <?php
            include_once("footer.php");
        ?>
    </div>

    <!--JS-->
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jcarousellite.js"></script>


    <script>
        $(".menu-toggle-btn").click(function () {
            $(this).toggleClass(".fa-times");
            $(".navigation-menu").toggleClass("active");
        })

        $(".basic2 .carousel").jCarouselLite({
            btnNext: ".basic2 .next",
            btnPrev: ".basic2 .prev",
            visible: 7,
            auto: 800,
            speed: 1000
        });

    </script>
</body>

</html>
