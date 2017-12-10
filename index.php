<!DOCTYPE html>
<html lang = "pt-BR">
    <meta charset = "utf-8"/>

    <head>
        <meta name = "viewport" content = "width=device-width, initial scale=1.0">
        <style>
            .standard{
                text-align: center;
                font-family: arial;
                font-size: 40px;
                color: white;
            }
            .fancyTxt{
                text-align: center;
                font-size: 30px;
                color: white;
            }
            .background{
                background: #863434 url("img/background.png") no-repeat center;
            }
            img{
                width: 10%;
                height: 10%;
            }
        </style>
        <title>PEREGRINO</title>
        <!-- Metadata geralmente define titulo, tipo de letra/caractere,
        estilos/CSS, links, scrips, entre outros metadados-->
    </head>

    <body class = "background"> <!-- Body == conteúdo visível da página-->
        <?php
            echo "my name is BARD";
        ?>
        <h1 class = "standard">Um fudido em Marte</h1>
        <hr>    <!-- "Regua" horizontal-->
        <p class = "fancyTxt">  <!-- Texto pré-formatado-->
            My Bonnie lies over the ocean.
            <br><br>
            My Bonnie lies over the sea.
            <br><br>
            My Bonnie lies over the ocean.
            <br><br>
            Oh, bring back my Bonnie to me.
        </p>
        <p class = "fancyTxt" title = "sou uma dica"> parágrafo</p>
        <br>
        <a href = "https://www.jovemnerd.com.br" target = "_blank">
            <img src = "img/nerdinho.png" alt = "Nerdinho">
        </a>
        <img src = "img/gordinhos.jpeg" alt = "p1-p2" usemap = "#mapFat">
        <map name = "workmap">
            <area shape = ""
        </map>
        <!-- Todos os elementos/tag's de HTML podem ter
        atributos (atributos são informações adicionais sobre o elemento/tag),
        tais atributos sempre ocorrem no início do elemento/tag e normalmente são declarados
        dessa forma: NAME = "VALUE" -->
    </body>
</html>
