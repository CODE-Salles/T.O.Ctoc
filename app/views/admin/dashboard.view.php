<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../../public/css/dashboard.css">

</head>
<body>
    
    <div class="capa-dashboard">
        <div class="esquerdo-dashboard">
            
            <button class="primeiro-dashboard"><a href="/" class="link-button">Página Inicial</a></button>

            <button class="segundo-dashboard"><a href="admin/posts" class="link-button">Gerenciar Publicações</a></button>

            <button class="terceiro-dashboard"><a href="admin/users" class="link-button">Gerenciar Usuários</a></button>

            <form action="logout" method="get"><button class="quarto-dashboard" type="submit">Sair</button></form>

        </div>
        
        <div class="direito-dashboard">
            <img class="imagem-dashboard" src="../../../public/assets/toctoc.png">
        </div>
    </div>

</body>
</html>