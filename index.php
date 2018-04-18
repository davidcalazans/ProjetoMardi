<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Projeto Mardi</title>
        <link rel="shortcut icon" type="image/x-icon" href="icones/icone.ico" />
        <link rel="stylesheet" href="css/estilo.css"/>
        <link rel="stylesheet" href="icones/fonts.css"/>
        <meta name="viewport" content="width=device-width, user-scalable=no, inicial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    </head>
    <body>
        <header id="cabecalho">
            <div class="menu">
                <a href="#" class="bt-menu"><span class="icon-menu"></span>Mardi</a>
            </div>
            <nav>
                <ul>
                    <div id="logo"><img src="icones/logoTransparente.png"/></div>
                    <li><a href="#"><span class="icon-home3"></span>Inicio</a></li>
                    <li class="submenu">
                        <a href="#"><span class="icon-map"></span>Mapa<img src="icones/down-arrow.png" style="width: 10px; height: 10px; margin-left: 10px;"></a>
                        <ul class="children">
                            <li><a href="mapa.php">Visualizar</a></li>
                            <li><a href="#">Notificar ocorrência</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="icon-stats-dots"></span>Sobre o projeto</a></li>
                    <a href="login.php" class="btn">Login</a>
                </ul>
            </nav>
        </header>

        <div id="corpo">
            <div id="parallaxFundo" class="parallax">
                <div id="titulo">
                    <img src="icones/icone_3.1.png"/>
                    <h1>Projeto MARDI</h1>
                    <h2><p>Mapeamento de Áreas de Risco de Deslizamento e Inundações</p></h2>
                </div>
            </div>

            <section id="conteudo">
                <article class="artigo">
                    <div id="objetivo">
                        <img src="icones/settings.png"/>
                        <h2>Nosso objetivo</h2>
                        <h4><p>Desejamos que nossa ferramenta seja uma importante aliada
                                dos cidadãos, alertando-os com eventos ocosionados por 
                                chuvas e deslizamentos e, com isso, promover sua tranquilidade</p></h4>
                    </div>
                    <div id="geolocalizacao">
                        <img src="icones/map-location.png"/>
                        <h2>Geolocalização</h2>
                        <h4><p>Utilizamos a geolocalização para identificar onde você se encontra e,
                                assim, mostrar-lhe perigos nas regiões proximas.</p></h4>
                    </div>
                    <div id="appMobile">
                        <img src="icones/smartphone.png"/>
                        <h2>Aplicativo mobile</h2>
                        <h4><p>Em breve!.</p></h4>
                    </div>
                </article>

                <article id="oqueEh">
                    <img src="icones/faq.png"/>
                    <h1>O que é MARDI?</h1>
                    <h2>MARDI na verdade é uma sigla que significa 
                        "Mapeamento de Áreas de Risco de Deslizamento e Inundações".</h2>
                </article>



            </section>

            <div id="parallaxFundo" class="parallax"></div>
        </div>

        <footer>

        </footer>

        <script src="javascript/mapa.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPn1Ln6iKrdnOxRvRWePr-Mcmhda6eJvw&callback=initMap" async defer></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="javascript/menu.js"></script>
    </body>
</html>
