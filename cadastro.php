<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Cadastro - Melhor Leitura</title>
</head>

<body style="height:100vh;">
  <div class="container">
    <form id="cadastro" action="./src/cadastro-server.php" method="post">
      <label class="label" for='nome'>Nome</label>
      <input required class="input" name="nome" id="nome" type="text" placeholder="Digite o seu nome">
      <label class="label" for="email">Email</label>
      <input required class="input" type="email" name="email" id="email" placeholder="Digite o seu email">
      <label class="label" for='senha'>Senha</label>
      <input required class="input" type="password" name="senha" id="senha" placeholder="Digite a sua senha">
      <label class="label" for="passwordRepeat">Digite novamente sua senha</label>
      <input required class="input" type="password" name="passwordRepeat" id="passwordRepeat" placeholder="Digite novamente a senha">
      <button class="subForm" type="submit">Cadastrar</button>
      <section class="redes-sociais">
        <img width="48" height="48" src="https://img.icons8.com/fluency/48/facebook-new.png" alt="facebook-new"/>
        <img width="48" height="48" src="https://img.icons8.com/stickers/100/instagram-new--v2.png" alt="instagram-new--v2"/>
        <img width="48" height="48" src="https://img.icons8.com/officel/40/linkedin.png" alt="linkedin"/>
      </section>
  </div>
  <script src="./src/passwordConfirm.js"></script>
</body>
</html>