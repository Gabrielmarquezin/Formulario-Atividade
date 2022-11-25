<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Copa do Mundo</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

</head>
<body>
    <div class="all">
        <img src="https://s2.glbimg.com/AMnhfEooZslZBxVsqGmeE1uwS5Y=/0x0:1920x1080/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_ee6202d7f3f346a7a5d7affb807d8893/internal_photos/bs/2021/T/R/YokjYPQjeauiWVD1thsQ/copa-alemanha-2006-vale.jpg" alt="Imagem da copa">
        <h1>Faça login com sua conta</h1>
        <p>Entre em sua conta para acessar seu álbum de figurinhas</p>
        <form action="./main.php" method="POST">
            <label for="name">Qual seu usuário?</label> 
            <div class="in">
                <i class="material-symbols-outlined">person</i>
                <input type="text" id="name" placeholder="Ex: Willian" name="nome">
            </div>
            <label for="pass">Qual sua senha?</label>
            <div class="in">
                <i class="material-symbols-outlined">lock</i>
                <input type="text" type="password" id="pass" placeholder="Ex: 12345678" name="senha">
            </div>
            <div class="check">
                <input type="checkbox">
                <b>Mantenha-me conectado</b>
            </div>

            <button type="submit">Enviar</button>
        </form>
    </div>

    <script src="./script.js"></script>
</body>
</html>