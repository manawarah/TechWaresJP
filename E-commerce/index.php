<?php
    include_once('./database/conexao.php');
    session_start();
    $email = $_SESSION['email'] ?? '';
    $sql = mysqli_query($conexao, "SELECT * FROM users WHERE email = '$email';");
    $return = $sql->fetch_assoc();

    $name = $return['nome'] ?? '';
?>
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
    <?php
        if(isset($_SESSION['email']) == true){
            echo "
                <nav class='nav-bar'>
                    <div class='nav-div'>
                        <i class='fa-solid fa-circle-question fa-lg' style='color: #e90313;'></i>
                        <span style='font-size: 10pt;'>ATENDIMENTO</span>
                        <br>
                        <a class='nav-link' href='#'>AO CLIENTE</a>
                    </div>
                    <div class='nav-div'>
                        <i class='fa-solid fa-star fa-lg' style='color: #e90313;'></i>
                        <span style='font-size: 10pt;'>MEUS</span>
                        <br>
                        <a class='nav-link' href='#'>FAVORITOS</a>
                    </div>
                    <div class='nav-div'>
                        <i class='fa-solid fa-user fa-lg' style='color: #e90313;'></i>
                        <span style='font-size: 10pt;'>MINHA CONTA</span>
                        <br>
                        <p class='nav-link'>Olá $name</p>
                    </div>
                    <div class='nav-div' style='color: #e90313;'>
                        <i class='fa-solid fa-right-from-bracket fa-lg'></i>
                        <a href='logoff.php' class='nav-link'>SAIR</a>
                        <br>
                    </div>
                </nav>

            ";
        }else{
            echo "
                <nav class='nav-bar'>
                    <div class='nav-div'>
                        <i class='fa-solid fa-user' fa-lg style='color: #e90313;'></i>
                        <span style='font-size: 10pt;'>MINHA CONTA</span>
                        <br>
                        <a class='nav-link' href='login/login.php'>ENTRAR/CADASTRO</a>
                    </div>
                    <div class='nav-div'>
                        <i class='fa-solid fa-circle-question fa-lg' style='color: #e90313;'></i>
                        <span style='font-size: 10pt;'>ATENDIMENTO</span>
                        <br>
                        <a class='nav-link' href='#'>AO CLIENTE</a>
                    </div>
                    <div class='nav-div'>
                        <i class='fa-solid fa-star fa-lg' style='color: #e90313;'></i>
                        <span style='font-size: 10pt;'>MEUS</span>
                        <br>
                        <a class='nav-link' href='#'>FAVORITOS</a>
                    </div>
                </nav>

            ";
        }
        ?>
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
            <?php
                $sql = mysqli_query($conexao, 'SELECT * FROM produtos');
                while($pro = $sql->fetch_assoc()){
                    $pId = $pro['idProduto'];
                    $pName = $pro['nome'];
                    $pPrice = $pro['preco'];
                    $pPhoto = $pro['foto'];

                    echo "
                    <div class='box-promo'>
                        <img src='$pPhoto' alt='' class='img-promo'>
                        <a href='product/product.php?id=$pId' class='desc-promo' title='$pName'>
                            $pName
                        </a>
                        <del class='price'>R$799,99</del>
                        <h1 class='dPrice'>R$$pPrice</h1>
                        <span class='divideCartao'>Até <span style='color: green;'>10x</span> sem juros no cartão</span>
                    </div>
                    ";
                }
            ?>
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
<footer>
    <ul>
        <li style="color: red;">Redes Sociais</li>
        <li>Instagram</li>
        <li>Facebook</li>
        <li>Twitter</li>
        <li>Whatsapp</li>
    </ul>    
    <ul>
        <li style="color: red;">Conheça-nos</li>
        <li>Sobre o e-commerce</li>
        <li>Comunicados à imprensa</li>
        <li>Comunidade</li>
        <li>Acessibilidade</li>
    </ul>
    <ul>
        <li style="color: red;">Pagamentos</li>
        <li>PIX</li>
        <li>Boleto</li>
        <li>Paypal</li>
        <li>Cartão de Crédito</li>

    </ul>
    <ul>
        <li style="color: red;">Outros</li>
        <li>Ganhe dinheiro conosco</li>
        <li>Venda no e-commerc</li>
        <li>Proteja e construa o seu computador</li>
        <li>Anuncie seus produtos</li>
    </ul>
</footer>
</section>
</body>
</html>