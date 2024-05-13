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
<body style="background-color: #303030;">
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
        <button class="btn-carrinho"><i class="fa-solid fa-cart-shopping fa-lg" style="color: white;"></i> CARRINHO</button>
    </header>
    <main>

        <!-- Background de entrada -->

        <!-- <figure>
            <img src="./assets/photos/back-main.png" alt="Banckgound Principal" class="background-main">
        </figure>
        -->

        <!-- Caixas de promoção -->

        <div id='promo'>
            <div class="box-promo">
                <img src="./assets/photos/products/monitor_1.png" alt="" class="img-promo">
                <a href='#' class="desc-promo">Monitor</a>
                <button class="btn-promo">R$300,00</button>
            </div>
            <div class="box-promo">
                <img src="./assets/photos/products/monitor_2.png" alt="" class="img-promo">
                <a href='#' class="desc-promo">Monitor</a>
                <button class="btn-promo">R$700,00</button>
            </div>
            <div class="box-promo">
                <img src="./assets/photos/products/cpu_1.png" alt="" class="img-promo">
                <a href='#' class="desc-promo">CPU</a>
                <button class="btn-promo">R$3300,00</button>
            </div>
            <div class="box-promo">
                <img src="./assets/photos/products/mouse_1.png" alt="" class="img-promo">
                <a href='#' class="desc-promo">Mouse</a>
                <button class="btn-promo">R$150,00</button>
            </div>
            <div class="box-promo">
                <img src="./assets/photos/products/teclado_1.png" alt="" class="img-promo">
                <a href='#' class="desc-promo">Teclado</a>
                <button class="btn-promo">R$100,00</button>
            </div>
            <div class="box-promo">
                <img src="./assets/photos/products/teclado_2.png" alt="" class="img-promo">
                <a href='#' class="desc-promo">Teclado</a>
                <button class="btn-promo">R$210,00</button>
            </div>
            <div class="box-promo">
                <img src="./assets/photos/products/cpu_2.png" alt="" class="img-promo">
                <a href='#' class="desc-promo">CPU</a>
                <button class="btn-promo">R$150,00</button>
            </div>
            <div class="box-promo">
                <img src="./assets/photos/products/fone_1.png" alt="" class="img-promo">
                <a href='#' class="desc-promo">Fone de Ouvido</a>
                <button class="btn-promo">R$50,00</button>
            </div>
        </div>
    </main>
</body>
</html>