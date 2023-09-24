<?php
 session_start();

//conexão com banco de dados
 $pdo = new PDO("mysql:dbname=biblioteca;host=localhost:3306;", "root", "250305");
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 //querrys
 $querry = "SELECT * FROM livros";

 $res = $pdo->query($querry);
 $array = $res->fetchAll(PDO::FETCH_ASSOC);
 if(!isset($_SESSION['login'])){
    $_SESSION['login'] = "deslogado";
 }
 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Biblioteca</title>
</head>
<body style="height: 100vh;">
    <header>
        <span class="logo" >
            <h1>Biblioteca Melhor Leitura</h1><img width="50" height="50" src="https://img.icons8.com/quill/50/library.png" alt="library"/>
        </span>

        <div class="login">
            <img id='account' width="48" height="48" src="https://img.icons8.com/pulsar-line/48/guest-male.png" alt="guest-male"/>
            <div class="off">
                <a href="./login.php">Login</a>
                <a href="./cadastro.php">Cadastro</a>
            </div>
            <div class="logOut">
                <a href="./minhaConta.php">Minha Conta</a>
                <a href="./carrinho.php">Carrinho</a>
            </div>
            <form style="display: none;" id="sair" action="./src/logOut-server.php" method="post">
                  <button class="subForm" type="submit">Log Out</button>
            </form>
        </div>
    </header>
    <main>
        <section class="scrool">
            <?php foreach($array as $value):?>
               <div class="item">
                 <img src="<?= "./src/img/".$value['imagem']?>" > 
                 <p> Titulo: <?= $value['titulo'] ?> </p>
                 <p> Autor: <?= $value['autor'] ?> </p>
                 <p> Editora: <?= $value['editora']?></p>
                 <div class="acoes">
                 <button>
                    <span class="box">
                        Comprar
                    </span>
                </button>

                <button>
                    <span class="box">
                     Adicionar ao carrinho
                    </span>
                </button>
                 </div>
               </div>
            <?php endforeach ?>    
        </section>
    </main>

 <script>

    let login = "<?=$_SESSION['login']?>";
    if(login !== "logado"){
        let off = document.querySelector('.off');
        let account = document.querySelector('#account');

        account.addEventListener("mouseenter",(event) =>{

            off.classList.add("on");
            off.classList.remove("off");
            account.style.transition = "all .8s"
            account.style.backgroundColor = "rgba( 75, 0, 130, .8)";
        })

        account.addEventListener("mouseleave", (event) =>{

            setTimeout(() =>{
                off.classList.remove("on");
                off.classList.add("off");
                account.style.transition = "all .8s"
                account.style.backgroundColor = "initial";
            },6000)
        })

        off.addEventListener("mouseleave", (event) =>{
            off.classList.remove("on");
            off.classList.add("off");
            account.style.transition = "all .8s"
            account.style.backgroundColor = "initial";
        })
    }else{
       let sair = document.querySelector("#sair"); 
       let logOut = document.querySelector('.logOut');
       let account = document.querySelector('#account');

       sair.style.display = "block";
       sair.style.position = "absolute"
       sair.style.right = "-5rem"

       account.addEventListener("mouseenter", () =>{
         
            logOut.classList.add("on");
            logOut.classList.remove("logOut");
            account.style.transition = "all .8s"
            account.style.backgroundColor = "rgba( 75, 0, 130, .8)";
       })
       account.addEventListener("mouseleave", (event) =>{

            setTimeout(() =>{
                logOut.classList.remove("login");
                logOut.classList.add("logOut");
                account.style.transition = "all .8s"
                account.style.backgroundColor = "initial";
            },6000)
        })

        logOut.addEventListener("mouseleave", (event) =>{
            logOut.classList.remove("login");
            logOut.classList.add("logOut");
            account.style.transition = "all .8s"
            account.style.backgroundColor = "initial";
        })
    }
 </script>
</body>
</html>