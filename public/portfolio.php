<?php 
    global $tituloPagina;
    $tituloPagina = "Portfolio";
    include('assets/partes/cabecalho.php') 
?>
        <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Portfolio</h1>
        </header>
        <section class="pagina-conteudo">
            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
                Sequi quidem dolorum sunt voluptatem, recusandae repudiandae architecto excepturi omnis quo voluptates.<br>
                explicabo iure repellendus illo suscipit ad consequatur.
            </p>
            <nav>
                <ul class="lista-trabalhos">
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="../src/assets/img/portfolio/aircraft-2806035_1280.jpg">
                            <img class="lista-trabalhos__img" src="../src/assets/img/portfolio/miniaturas/aircraft-2806035_min.jpg" alt="Avião de manobras soltando fumaça">
                            <h2 class="lista-trabalhos__titulo">Nome do trabalho</h2>
                        </a> 
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="../src/assets/img/portfolio/gear-2291916_1280.jpg">
                            <img class="lista-trabalhos__img" src="../src/assets/img/portfolio/miniaturas/gear-2291916_min.jpg" alt="Engrenagens vista de perto">
                            <h2 class="lista-trabalhos__titulo">Nome do outro trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="../src/assets/img/portfolio/hong-kong-1990268_1280.jpg">
                            <img class="lista-trabalhos__img" src="../src/assets/img/portfolio/miniaturas/hong-kong-1990268_min.jpg" alt="Foto da cidade de hong kong a noite">
                            <h2 class="lista-trabalhos__titulo">Nome do outro trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="../src/assets/img/portfolio/landscape-2268775_1280.jpg">
                            <img class="lista-trabalhos__img" src="../src/assets/img/portfolio/miniaturas/landscape-2268775_min.jpg" alt="Imagem de um vale com um conjunto de montanhas">
                            <h2 class="lista-trabalhos__titulo">Nome do outro trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="../src/assets/img/portfolio/saddle-2614038_1280.jpg">
                            <img class="lista-trabalhos__img" src="../src/assets/img/portfolio/miniaturas/saddle-2614038_min.jpg" alt="Banco de bicicleta com molas">
                            <h2 class="lista-trabalhos__titulo">Nome do outro trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="../src/assets/img/portfolio/town-2430571_1920.jpg">
                            <img class="lista-trabalhos__img" src="../src/assets/img/portfolio/miniaturas/town-2430571_min.jpg" alt="Imagem de cidade vista de cima">
                            <h2 class="lista-trabalhos__titulo">Nome do outro trabalho</h2>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
<?php include('assets/partes/rodape.php') ?>