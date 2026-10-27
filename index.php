<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

    <!-- Link Icones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">

    <!-- Nosso CSS (fica depois do bootstrap para o nosso estilo valer) -->
    <link rel="stylesheet" href="style.css">

    <title>Agencia de turismo</title>
</head>

<body>
    <!-- SEPARENDO FUNÇÕES -->

    <!-- HEADER -->
    <header>

        <!-- NAV: logo na esquerda e menu na direita -->
        <nav class="navegacao">
            <div class="container">
                <a href="#">
                    <img src="https://14biscrm.com.br/brand/og-14bis.png" alt="Logo da agência" class="logo">
                </a>

                <ul class="menu">
                    <li><a href="#" class="ativo"><i class="bi bi-house-door"></i> Início</a></li>
                    <li><a href="#pacotes"><i class="bi bi-airplane"></i> Pacotes</a></li>
                    <li><a href="#destinos"><i class="bi bi-buildings"></i> Destinos</a></li>
                    <li><a href="#ofertas"><i class="bi bi-tag"></i> Promoções</a></li>
                    <li><a href="#sobre"><i class="bi bi-shield-check"></i> Sobre nós</a></li>
                    <li><a href="#contato"><i class="bi bi-telephone"></i> Contato</a></li>
                </ul>

                 <a href="#contato" class="botao-laranja"><i class="bi bi-person"></i> Fale conosco</a>

            </div>
        </nav>

    </header>

    <!-- MAIN -->
    <main>

        <!-- ===== 1) CARROSSEL GRANDE DE OFERTAS ===== -->
        <section id="ofertas">
            <div id="carrosselOfertas" class="carousel slide carrossel" data-bs-ride="carousel">

                <div class="carousel-inner">

                    <!-- Slide 1 (o "active" faz ele aparecer primeiro) -->
                    <div class="carousel-item active">
                        <div class="slide">
                            <img src="https://cdn.futura-sciences.com/sources/images/diaporama/1037-diapo-bresil/album-bresil31.jpg" alt="Oferta 1" class="imagem-grande">
                            <div class="camada-escura"></div>
                            <div class="texto-oferta">
                                <span class="selo">PROMOÇÃO ESPECIAL</span>
                                <h1>Salvador com <span class="laranja">20% de desconto</span></h1>
                                <p>Água cristalina, culinaria local e paisagens deslumbrantes.</p>
                                <a href="#contato" class="botao-laranja">Ver oferta</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="slide">
                            <img src="https://www.adventureclub.com.br/wp-content/uploads/2024/08/Katerre-Jacare-Tinga2-topo.jpg" alt="Oferta 2" class="imagem-grande">
                            <div class="camada-escura"></div>
                            <div class="texto-oferta">
                                <span class="selo">PROMOÇÃO ESPECIAL</span>
                                <h1> Tour pelo <span class="laranja">Brasil</span></h1>
                                <p>Tudo que você precisa para uma experiência inesquecível.</p>
                                <a href="#contato" class="botao-laranja">Ver oferta</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="slide">
                            <img src="https://wallpaperaccess.com/full/10847573.jpg" alt="Oferta 3" class="imagem-grande">
                            <div class="camada-escura"></div>
                            <div class="texto-oferta">
                                <span class="selo">PROMOÇÃO ESPECIAL</span>
                                <h1>Férias em <span class="laranja">Gramado</span></h1>
                                <p>Chocolate quente, charme europeu e muito aconchego.</p>
                                <a href="#contato" class="botao-laranja">Ver oferta</a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Setas para voltar e avançar -->
                <button class="seta seta-esquerda" type="button" data-bs-target="#carrosselOfertas" data-bs-slide="prev">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="seta seta-direita" type="button" data-bs-target="#carrosselOfertas" data-bs-slide="next">
                    <i class="bi bi-chevron-right"></i>
                </button>

                <!-- Bolinhas embaixo -->
                <div class="carousel-indicators pontos">
                    <button type="button" class="active" data-bs-target="#carrosselOfertas" data-bs-slide-to="0"></button>
                    <button type="button" data-bs-target="#carrosselOfertas" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carrosselOfertas" data-bs-slide-to="2"></button>
                </div>

            </div>
        </section>


        <!-- ===== 2) VIAGENS NACIONAIS: CARROSSEL NA ESQUERDA E TEXTO NA DIREITA ===== -->
        <section class="destinos fundo-1" id="destinos">
            <div class="container">
                <!-- row = linha / col = coluna (o Bootstrap divide a linha em 12 partes) -->
                <div class="row align-items-center">

                    <!-- Coluna da esquerda: carrossel -->
                    <div class="col-lg-7">
                        <div id="carrosselNacionais" class="carousel carrossel">
                            <div class="carousel-inner">

                              <!-- Grupo Slides Nacional 1-->
                                <div class="carousel-item active">
                                    <div class="row row-cols-3 g-2">
                                        <!-- cada cartão = uma imagem + o nome do lugar -->
                                        <div class="col"><div class="cartao"><img src="https://mcbtur.com.br/wp-content/uploads/2025/01/Pequenos-Lencois-Maranhenses.webp" alt="Rio de Janeiro"><span class="nome-lugar">Rio de Janeiro</span></div></div>
                                        <div class="col"><div class="cartao"><img src="https://mcbtur.com.br/wp-content/uploads/2025/01/Pequenos-Lencois-Maranhenses.webp" alt="Lençóis Maranhenses"><span class="nome-lugar">Lençóis Maranhenses</span></div></div>
                                        <div class="col"><div class="cartao"><img src="https://mcbtur.com.br/wp-content/uploads/2025/01/Pequenos-Lencois-Maranhenses.webp" alt="Gramado"><span class="nome-lugar">Gramado</span></div></div>
                                    </div>
                                </div>

                              <!-- Grupo Slides Nacional 2-->
                                <div class="carousel-item">
                                    <div class="row row-cols-3 g-2">
                                        <div class="col"><div class="cartao"><img src="https://mcbtur.com.br/wp-content/uploads/2025/01/Pequenos-Lencois-Maranhenses.webp" alt="Chapada Diamantina"><span class="nome-lugar">Chapada Diamantina</span></div></div>
                                        <div class="col"><div class="cartao"><img src="https://mcbtur.com.br/wp-content/uploads/2025/01/Pequenos-Lencois-Maranhenses.webp" alt="Foz do Iguaçu"><span class="nome-lugar">Foz do Iguaçu</span></div></div>
                                        <div class="col"><div class="cartao"><img src="https://mcbtur.com.br/wp-content/uploads/2025/01/Pequenos-Lencois-Maranhenses.webp" alt="Jericoacoara"><span class="nome-lugar">Jericoacoara</span></div></div>
                                    </div>
                                </div>

                            </div>

                            <!-- Setas para voltar e avançar -->
                            <button class="seta seta-esquerda" type="button" data-bs-target="#carrosselNacionais"
                                data-bs-slide="prev">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <button class="seta seta-direita" type="button" data-bs-target="#carrosselNacionais"
                                data-bs-slide="next">
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Texto Viagens Nacionais - Direita -->
                    <div class="col-lg-5">
                        <p class="etiqueta"><i class="bi bi-geo-alt-fill"></i> VIAGENS NACIONAIS</p>
                        <h2>Descubra o Brasil, <span class="laranja">de norte a sul!</span></h2>
                        <p class="texto-claro">De praias paradisíacas a cidades históricas, nossa seleção de destinos nacionais é perfeita para todos os estilos de viajantes.</p>
                        <div class="beneficios">
                            <div class="beneficio"><i class="bi bi-shield-check"></i> <span>Pacotes<br>personalizados</span></div>
                            <div class="beneficio"><i class="bi bi-wallet2"></i> <span>Melhores<br>preços</span></div>
                            <div class="beneficio"><i class="bi bi-headset"></i> <span>Suporte<br>especializado</span></div>
                        </div>
                        <a href="#contato" class="botao-contorno">Conheça nossos destinos nacionais <i class="bi bi-arrow-right"></i></a>
                    </div>

                </div>
            </div>
        </section>   

                <!-- ===== 2) VIAGENS NACIONAIS: CARROSSEL NA ESQUERDA E TEXTO NA DIREITA ===== -->
        <section class="destinos fundo-1" id="destinos">
            <div class="container">
                <!-- row = linha / col = coluna (o Bootstrap divide a linha em 12 partes) -->
                <div class="row align-items-center">

                    <!-- Coluna da esquerda: carrossel -->
                    <div class="col-lg-7">
                        <div id="carrosselNacionais" class="carousel carrossel">
                            <div class="carousel-inner">

                              <!-- Grupo Slides Nacional 1-->
                                <div class="carousel-item active">
                                    <div class="row row-cols-3 g-2">
                                        <!-- cada cartão = uma imagem + o nome do lugar -->
                                        <div class="col"><div class="cartao"><img src="https://mcbtur.com.br/wp-content/uploads/2025/01/Pequenos-Lencois-Maranhenses.webp" alt="Rio de Janeiro"><span class="nome-lugar">Rio de Janeiro</span></div></div>
                                        <div class="col"><div class="cartao"><img src="https://mcbtur.com.br/wp-content/uploads/2025/01/Pequenos-Lencois-Maranhenses.webp" alt="Lençóis Maranhenses"><span class="nome-lugar">Lençóis Maranhenses</span></div></div>
                                        <div class="col"><div class="cartao"><img src="https://mcbtur.com.br/wp-content/uploads/2025/01/Pequenos-Lencois-Maranhenses.webp" alt="Gramado"><span class="nome-lugar">Gramado</span></div></div>
                                    </div>
                                </div>

                              <!-- Grupo Slides Nacional 2-->
                                <div class="carousel-item">
                                    <div class="row row-cols-3 g-2">
                                        <div class="col"><div class="cartao"><img src="https://mcbtur.com.br/wp-content/uploads/2025/01/Pequenos-Lencois-Maranhenses.webp" alt="Chapada Diamantina"><span class="nome-lugar">Chapada Diamantina</span></div></div>
                                        <div class="col"><div class="cartao"><img src="https://mcbtur.com.br/wp-content/uploads/2025/01/Pequenos-Lencois-Maranhenses.webp" alt="Foz do Iguaçu"><span class="nome-lugar">Foz do Iguaçu</span></div></div>
                                        <div class="col"><div class="cartao"><img src="https://mcbtur.com.br/wp-content/uploads/2025/01/Pequenos-Lencois-Maranhenses.webp" alt="Jericoacoara"><span class="nome-lugar">Jericoacoara</span></div></div>
                                    </div>
                                </div>

                            </div>

                            <!-- Setas para voltar e avançar -->
                            <button class="seta seta-esquerda" type="button" data-bs-target="#carrosselNacionais"
                                data-bs-slide="prev">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <button class="seta seta-direita" type="button" data-bs-target="#carrosselNacionais"
                                data-bs-slide="next">
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Texto Viagens Nacionais - Direita -->
                    <div class="col-lg-5">
                        <p class="etiqueta"><i class="bi bi-geo-alt-fill"></i> VIAGENS NACIONAIS</p>
                        <h2>Descubra o Brasil, <span class="laranja">de norte a sul!</span></h2>
                        <p class="texto-claro">De praias paradisíacas a cidades históricas, nossa seleção de destinos nacionais é perfeita para todos os estilos de viajantes.</p>
                        <div class="beneficios">
                            <div class="beneficio"><i class="bi bi-shield-check"></i> <span>Pacotes<br>personalizados</span></div>
                            <div class="beneficio"><i class="bi bi-wallet2"></i> <span>Melhores<br>preços</span></div>
                            <div class="beneficio"><i class="bi bi-headset"></i> <span>Suporte<br>especializado</span></div>
                        </div>
                        <a href="#contato" class="botao-contorno">Conheça nossos destinos nacionais <i class="bi bi-arrow-right"></i></a>
                    </div>

                </div>
            </div>
        </section>   
    </main>

    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL"
        crossorigin="anonymous"></script>
</body>

</html>