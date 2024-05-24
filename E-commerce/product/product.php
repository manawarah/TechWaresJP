<?php
    include_once('../database/conexao.php');
    session_start();
    if(isset($_SESSION['email']) == true){

        header('Location: ../login/login.php');
    }
    $pId = $_GET['id'];
    $sql = mysqli_query($conexao, "SELECT * FROM produtos WHERE idProduto = $pId");
    $pro = $sql->fetch_assoc();

    $pName = $pro['nome'];
    $pPhoto = $pro['foto'];
    $pPrice = $pro['preco'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="../styles/defaults.css">
    <title><?php echo "$pName" ?></title>
</head>
<body>
    
</body>
</html>