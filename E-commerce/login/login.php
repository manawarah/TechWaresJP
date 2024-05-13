<?php
    $email = $_POST['email'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../styles/defaults.css">
    <title>Login</title>
</head>
<body style="background-color: #303030;">
    <div class="box-img">
        <div>
            <img src="../assets/Techware.png" alt="">
    </div>
    </div>
    <div style="width: 600px; display: flex; justify-content: center; align-items: center;">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <label for="email">E-mail:</label>
            <input type="text" name="email" class="" value="<?php echo "$email" ?>">
            <label for="password">Senha:</label>
            <input type="password" name="password" class="">
            <input type="submit" value="Entrar" name='submit'>
            <a href="" class="resetPass">Esqueci minha senha</a>
            <span class='line'></span>
            <a href="">
                <button class="btn-register">Criar Conta</button>
            </a>
        </form>
    </div>
</body>
</html>