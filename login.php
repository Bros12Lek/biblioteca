<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Login - Melhor Leitura</title>
</head>
<body style="height:100vh;">
    <div class="container">
        <form id="login" action="./src/login-server.php" method="post">
            <label for="email">Email</label>
            <input class="input" placeholder="Digite seu email" type="email" name="email" id="email">
            <label for="senha">Senha</label>
            <input class="input" placeholder="Digite sua senha" type="password" name="senha"  id="senha"> <img class="seePass" width="16" height="16" src="https://img.icons8.com/small/16/closed-eye.png" alt="closed-eye"/>
            <section class="redes-sociais">
                <img width="48" height="48" src="https://img.icons8.com/fluency/48/facebook-new.png" alt="facebook-new"/>
                <img width="48" height="48" src="https://img.icons8.com/stickers/100/instagram-new--v2.png" alt="instagram-new--v2"/>
                <img width="48" height="48" src="https://img.icons8.com/officel/40/linkedin.png" alt="linkedin"/> 
            </section>
            <button class="subForm" type="submit">Login</button>
            <p class="facaConta" >Não possui conta? <a href="./cadastro.php">Faça uma clicando aqui !</a></p>
        </form>
    </div>
    <script src="./src/passwordShow.js"></script>
</body>
</html>