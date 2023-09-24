<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Mudar Senha - Melhor Leitura</title>
</head>
<body style="height: 100vh;" >
    <div class="container">
        <form id="mudarSenha" action="./src/mudarSenha-server.php" method="post">
            <label for="senha">Nova Senha</label>
            <input required id="senha" type="password" name='senha' placeholder="Digite sua nova senha">
            <label for='passwordRepeat'>Confirmar senha</label>
            <input required id="passwordRepeat" type="password" name='passwordRepeat' placeholder="Confirme a nova senha">
            <button class="subForm" type="submit">Mudar Senha</button>
        </form>
    </div>
    <script src="./src/passwordChange.js"></script>
</body>
</html>