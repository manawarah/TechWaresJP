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
    <header class="cabecalho">
        <div class="logo">
            <a href="#"><img src="assets/Techware.png" alt="logo" width="200px"></a>
        </div>
        <nav class="nav-bar">

            
            <div class="nav-div">
                <i class="fa-solid fa-user fa-lg" style="color: #e90313;"></i>
                <span style="font-size: 10pt;">MINHA CONTA</span>
                <br>
                <a class="nav-link" href="login/login.html">ENTRAR / CADASTRO</a>
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
        <button class="btn-carrinho"><i class="fa-solid fa-cart-shopping fa-lg" style="color: white;"></i></button>
    </header>
    <select class="select-opt" name="Categoria" id="categoria">
        <option value="hardware">Hardware</option>
        <option value="periféricos">Periféricos</option>
        <option value="computadores">Computadores</option>
        <option value="monitores">Monitores</option>
        <option value="cadeiramesa">Cadeira e Mesas Gamer e Escritório</option>
        <option value="notebooks">Notebooks e Portáeis</option>
        <option value="vídeogames">Vídeo-Games</option>
        <option value="redes_wireless">Redes e Wireless</option>
    </select>
    <input class="pesquisar" type="text" name="Pesquisar" id="pesquisar" placeholder="Digite o que você procura... " >
    <i class="fa-solid fa-magnifying-glass fa-2xl" style="color: #e90313; position: relative; font-size: 25px; margin-top: 2.5%;"></i>
    <main>
        <section class="logo-txt">
            <div><img src="assets/Techware-logo-texto.png" alt="txt-logo" width="300px" style="margin-top: 10%; "></div>
                <div class="txt" >
                    <h1 style="font-size: 20pt;">Seja bem-vindo à TechWare, sua loja completa de periféricos e tecnologia!</h1>
                    <br>
                    <p style="font-size: 13pt;">Na <strong>TechWare</strong>, você encontra tudo o que precisa para equipar seu computador e aproveitar ao máximo sua experiência com tecnologia. Somos apaixonados por produtos de alta qualidade e preços competitivos, e estamos sempre buscando novidades para oferecer aos nossos clientes.</p>
                    <br>
                    <button class="btn-sobrenos">Sobre Nós</button>
                </div>
    
       

<!-- Background de entrada -->

       <!-- <figure>
            <img src="./assets/photos/back-main.png" alt="Banckgound Principal" class="background-main">
        </figure>
        -->

<!-- Caixas de promoção -->
        <section class="itens-promo">
            <br>
            <h1 style="color: white; font-size: 20pt; font-family: 'Times New Roman', Times, serif; margin-left: 10%; margin-top: 10px;">Itens em promoção:</h1>
            <div id='promo'>
                <div class="box-promo">
                    <img src="./assets/photos/products/monitor_1.png" alt="" class="img-promo">
                    <a href='#' class="desc-promo"><abbr style="text-decoration: underline;" title="Samsung T350 - Monitor Gamer, 24, FHD, 75Hz, HDMI, VGA, Freesync, Preto">Samsung T350 - Monitor Gamer, 24", FHD, 75Hz, HDMI, VGA, Freesync, Preto</abbr></a>
                    <button class="btn-promo">R$695,98</button>
                </div>
                <div class="box-promo">
                    <img src="./assets/photos/products/monitor_2.png" alt="" class="img-promo">
                    <a href='#' class="desc-promo"><abbr title="Monitor para PC Full HD UltraWide LG LED IPS 29” - 29WK600, multi-color" style="text-decoration: underline;">Monitor para PC Full HD UltraWide LG LED IPS 29” - 29WK600, multi-color</abbr></a>
                    <button class="btn-promo">R$700,00</button>
                </div>
                <div class="box-promo">
                    <img src="./assets/photos/products/cpu_1.png" alt="" class="img-promo">
                    <a href='#' class="desc-promo"><abbr title="PC Gamer ITX Arena, Ryzen 5 5600G, Radeon™ Graphics Vega 7, 16GB Ram, SSD 480GB, Gabinete RGB" style="text-decoration: underline;">PC Gamer ITX Arena, Ryzen 5 5600G, Radeon™ Graphics Vega 7, 16GB Ram, SSD 480GB, Gabinete RGB</abbr></a>
                    <button class="btn-promo">R$2.399,00</button>
                </div>
                <div class="box-promo">
                    <img src="./assets/photos/products/mouse_1.png" alt="" class="img-promo">
                    <a href='#' class="desc-promo"><abbr title="Mouse Gamer Sem Fio Logitech G703 LIGHTSPEED com RGB LIGHTSYNC, 6 Botões Programáveis, Sensor HERO 25K e Bateria Recarregável - Compatível com POWERPLAY" style="text-decoration: underline;">Mouse Gamer Sem Fio Logitech G703 LIGHTSPEED com RGB LIGHTSYNC, 6 Botões Programáveis, Sensor HERO 25K e Bateria Recarregável - Compatível com POWERPLAY</abbr></a>
                    <button class="btn-promo">R$150,00</button>
                </div>
                <div class="box-promo">
                    <img src="./assets/photos/products/teclado_1.png" alt="" class="img-promo">
                    <a href='#' class="desc-promo"><abbr title="Teclado HyperX Alloy Origins PBT Red BLACK" style="text-decoration: underline;">Teclado HyperX Alloy Origins PBT Red BLACK</abbr></a>
                    <button class="btn-promo">R$299,00</button>
                </div>
                <div class="box-promo">
                    <img src="./assets/photos/products/fone_1.png" alt="" class="img-promo">
                    <a href='#' class="desc-promo"><abbr title="JBL, Fone de Ouvido Sem Fio, Tune Buds, Bluetooth 5.3, À Prova D'água - Preto" style="text-decoration: underline;">JBL, Fone de Ouvido Sem Fio, Tune Buds, Bluetooth 5.3, À Prova D'água - Preto</abbr></a>
                    <button class="btn-promo">R$59,99</button>
                </div>
                
            </div>
            <button class="btn-vermais"><i class="fa-solid fa-circle-chevron-down fa-2xl" style="color: #169016;"></i></button>
        </section>
        </section>
    </main>
</body>
</html>