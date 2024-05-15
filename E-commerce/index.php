<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <!-- O arquivo default.css serve para guardar estilos que serão usados várias vezes em outras páginas -->
    <link rel="stylesheet" href="styles/defaults.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>TechWare</title>
</head>

<body>

<!-- Cabeçalho do site -->

<header class="cabecalho">
    <div class="logo">
        <a href="#"><img src="assets/Techware.png" alt="logo" width="200px"></a>
    </div>
    <nav class="nav-bar">
        <div class="nav-div">
            <i class="fa-solid fa-user fa-lg" style="color: #e90313;"></i>
            <span style="font-size: 10pt;">MINHA CONTA</span>
            <br>
            <a class="nav-link" href="login/login.php">ENTRAR / CADASTRO</a>
        </div>
        <div class="nav-div">
            <i class="fa-solid fa-circle-question fa-lg" style="color: #e90313;"></i>
            <span style="font-size: 10pt;">ATENDIMENTO</span>
            <br>
            <a class="nav-link" href="#">AO CLIENTE</a>
        </div>
        <div class="nav-div">
            <i class="fa-solid fa-star fa-lg" style="color: #e90313;"></i>
            <span style="font-size: 10pt;">MEUS</span>
            <br>
            <a class="nav-link" href="#">FAVORITOS</a>
        </div>
    </nav>
    <button class="btn-carrinho">
        <i class="fa-solid fa-cart-shopping fa-lg" style="color: white;"></i>
    </button>
</header>

<!-- Opções/Filtro do site --> 

<section>
    <select class="select-opt" name="categoria" id="categoria">
        <option value="hardware">Hardware</option>
        <option value="periféricos">Periféricos</option>
        <option value="computadores">Computadores</option>
        <option value="monitores">Monitores</option>
        <option value="cadeiramesa">Cadeira e Mesas Gamer e Escritório</option>
        <option value="notebooks">Notebooks e Portáeis</option>
        <option value="vídeogames">Vídeo-Games</option>
        <option value="redes_wireless">Redes e Wireless</option>
    </select>
    <input class="pesquisar" type="search" name="Pesquisar" placeholder="Digite o que você procura... ">
    <i class="fa-solid fa-magnifying-glass fa-2xl" style="color: #e90313; position: relative; font-size: 25px; margin-top: 2.5%;"></i>
</section>
<main>
    <!-- Caixas de promoção -->
    <section id="promo">
        <h1 class="title-page"> Novidades. <span style="color: white; font-size: 25px;">Veja nossas promoções</span></h1>
            <div class="box-promo">
                <img src="./assets/photos/products/monitor_1.png" alt="" class="img-promo">
                <a href='#' class="desc-promo" title="Samsung T350 - Monitor Gamer, 24, FHD, 75Hz, HDMI, VGA, Freesync, Preto">
                    Samsung T350 - Monitor Gamer, 24", FHD, 75Hz, HDMI, VGA, Freesync, Preto>
                </a>
                <del class="price">R$799,99</del>
                <h1 class="dPrice">R$695,98</h1>
                <span class="divideCartao">Até <span style="color: green;">10x</span> sem juros no cartão</span>
            </div>
            <div class="box-promo">
                <img src="./assets/photos/products/monitor_2.png" alt="" class="img-promo">
                <a href='#' class="desc-promo" title="Monitor para PC Full HD UltraWide LG LED IPS 29” - 29WK600, multi-color">
                    Monitor para PC Full HD UltraWide LG LED IPS 29” - 29WK600, multi-color
                </a>
                <del class="price">R$799,99</del>
                <h1 class="dPrice">R$695,98</h1>
                <span class="divideCartao">Até <span style="color: green;">10x</span> sem juros no cartão</span>
            </div>
            <div class="box-promo">
                <img src="./assets/photos/products/cpu_1.png" alt="" class="img-promo">
                <a href='#' class="desc-promo" title="PC Gamer ITX Arena, Ryzen 5 5600G, Radeon™ Graphics Vega 7, 16GB Ram, SSD 480GB, Gabinete RGB">
                    PC Gamer ITX Arena, Ryzen 5 5600G, Radeon™ Graphics Vega 7, 16GB Ram, SSD 480GB, Gabinete RGB
                </a>
                <del class="price">R$799,99</del>
                <h1 class="dPrice">R$695,98</h1>
                <span class="divideCartao">Até <span style="color: green;">10x</span> sem juros no cartão</span>
            </div>
            <div class="box-promo">
                <img src="./assets/photos/products/mouse_1.png" alt="" class="img-promo">
                <a href='#' class="desc-promo" title="Mouse Gamer Sem Fio Logitech G703 LIGHTSPEED com RGB LIGHTSYNC, 6 Botões Programáveis, Sensor HERO 25K e Bateria Recarregável - Compatível com POWERPLAY">
                    Mouse Gamer Sem Fio Logitech G703 LIGHTSPEED com RGB LIGHTSYNC, 6 Botões Programáveis, Sensor HERO 25K e Bateria Recarregável - Compatível com POWERPLAY
                </a>
                <del class="price">R$799,99</del>
                <h1 class="dPrice">R$695,98</h1>
                <span class="divideCartao">Até <span style="color: green;">10x</span> sem juros no cartão</span>            
            </div>
            <div class="box-promo">
                <img src="./assets/photos/products/teclado_1.png" alt="" class="img-promo">
                <a href='#' class="desc-promo" title="Teclado HyperX Alloy Origins PBT Red BLACK">
                    Teclado HyperX Alloy Origins PBT Red BLACK
                </a>
                <del class="price">R$799,99</del>
                <h1 class="dPrice">R$695,98</h1>
                <span class="divideCartao">Até <span style="color: green;">10x</span> sem juros no cartão</span>
            </div>
            <div class="box-promo">
                <img src="./assets/photos/products/fone_1.png" alt="" class="img-promo">
                <a href='#' class="desc-promo" title="JBL, Fone de Ouvido Sem Fio, Tune Buds, Bluetooth 5.3, À Prova D'água - Preto">
                    JBL, Fone de Ouvido Sem Fio, Tune Buds, Bluetooth 5.3, À Prova D'água - Preto
                </a>
                <del class="price">R$799,99</del>
                <h1 class="dPrice">R$695,98</h1>
                <span class="divideCartao">Até <span style="color: green;">10x</span> sem juros no cartão</span>
            </div>
            <div class="box-promo">
                <img src="./assets/photos/products/cpu_2.png" alt="" class="img-promo">
                <a href='#' class="desc-promo" title="Teclado HyperX Alloy Origins PBT Red BLACK">
                    Teclado HyperX Alloy Origins PBT Red BLACK
                </a>
                <del class="price">R$799,99</del>
                <h1 class="dPrice">R$695,98</h1>
                <span class="divideCartao">Até <span style="color: green;">10x</span> sem juros no cartão</span>
            </div>
            <div class="box-promo">
                <img src="./assets/photos/products/teclado_2.png" alt="" class="img-promo">
                <a href='#' class="desc-promo" title="JBL, Fone de Ouvido Sem Fio, Tune Buds, Bluetooth 5.3, À Prova D'água - Preto">
                    JBL, Fone de Ouvido Sem Fio, Tune Buds, Bluetooth 5.3, À Prova D'água - Preto
                </a>
                <del class="price">R$799,99</del>
                <h1 class="dPrice">R$695,98</h1>
                <span class="divideCartao">Até <span style="color: green;">10x</span> sem juros no cartão</span>
            </div>
        </div>
    </section>
</main>

<!-- Área de informações -->

<section class="section-info">
    <h1 class="title-page">
        Informações
    </h1>
    <div class="info">
        <h1 class="text-info">FRETE GRÁTIS</h1>
        <i class="fa-truck fa-solid icon-info"></i>
    </div>
    <div class="info">
        <h1 class="text-info">CRIE UMA CONTA E FAÇA SUA COMPRA</h1>
        <i class="fa-user fa-solid icon-info"></i>
    </div>
    <div class="info">
        <h1 class="text-info">COMPRE DE CASA</h1>
        <i class="fa-computer fa-solid icon-info"></i>
    </div>
</section>
<section>
    <footer style="color: aliceblue;">
       <ol>
        <li>instagran</li>
        <li>facebook</li>
        <li>twitter</li>
        <li>whatsapp</li>
       </ol>
       <ol><h1>protocolo do site</h1></ol>
       <li>comprar computadores</li>
    </footer>
</section>
</body>
<!--
            <div class="txt" >
            <h1 style="font-size: 20pt;">Seja bem-vindo à TechWare, sua loja completa de periféricos e tecnologia!</h1>
            <br>
            <p style="font-size: 13pt;">Na <strong>TechWare</strong>, você encontra tudo o que precisa para equipar seu computador e aproveitar ao máximo sua experiência com tecnologia. Somos apaixonados por produtos de alta qualidade e preços competitivos, e estamos sempre buscando novidades para oferecer aos nossos clientes.</p>
            <br>
            <button class="btn-sobrenos">Sobre Nós</button>
        </div>

-->

</html>