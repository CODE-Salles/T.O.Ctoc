<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <link rel="stylesheet" href="../../../public/css/landing_page2.css">
    <link rel="stylesheet" href="../../../public/css/reset.css">

    <link href="https://fonts.googleapis.com/css2?family=Amethysta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">

</head>

<body>
    <?php require('app/views/site/navbar.php'); ?>
   
    <main>
        <div class="lp-first-section">
            <div class="lp-column">
                <div class="lp-post">
                    <h2 class="lp-post-title"><?=$posts[0]->title?></h2>
                    <img class="lp-post-img" src=" <?=$posts[0]->image?>" alt="">
                    <h3> <?=$posts[0]->created_at?></h3>
                    <div class="lp-post-content">
                        <span class="lp-post-desc"> <?php echo substr($posts[0]->content, 0, 160) . "...";?></span>
                        <form action="get" action="/postagens/post">
                            <input type="hidden" name="id" value="<?=$posts[0]->id?>">
                            <button type="submit" class="lp-button lp-post-goto">Saiba Mais!</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="lp-column">
                <div class="special-card">
                    <div class="special-card-bg">
                        <button class="lp-button"><a href="https://www2.ufjf.br/cat/servicos/graduacao/aproveitamento-de-estudos/" target="_blank">Utilidades do cubo</a></button>
                        <button class="lp-button"><a href="https://www2.ufjf.br/cat/servicos/graduacao/aproveitamento-de-estudos/" target="_blank">Variações do Cubo</a></button>    
                    </div>
                </div>
                <div class="image-card">
                    <img class="middle-image" src="../../../public/assets/toctoc.png">
                </div>

                <div class="special-card">
                    <div class="special-card-bg">
                        <button class="lp-button"><a href="https://www2.ufjf.br/cat/servicos/graduacao/aproveitamento-de-estudos/" target="_blank">Dicas para resolver</a></button>
                        <button class="lp-button"><a href="https://www2.ufjf.br/cat/servicos/graduacao/aproveitamento-de-estudos/" target="_blank">Mais curiosidades</a></button>
                    </div>    
                </div>
            </div>


            <div class="lp-column">
            <div class="lp-post">
                    <h2 class="lp-post-title"><?=$posts[1]->title?></h2>
                    <img class="lp-post-img" src=" <?=$posts[1]->image?>" alt="">
                    <h3> <?=$posts[1]->created_at?></h3>
                    <div class="lp-post-content">
                        <span class="lp-post-desc"> <?php echo substr($posts[1]->content, 0, 160) . "...";?></span>
                        <form action="get" action="/postagens/post">
                            <input type="hidden" name="id" value="<?=$posts[1]->id?>">
                            <button type="submit" class="lp-button lp-post-goto">Saiba Mais!</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="lp-mid-section">
            <h1 class="lp-title">DIVIRTA-SE</h1>
        </div>
    </main>

    <div class="lp-second-section">
        <div class="lp-column">
        <div class="lp-post">
            <h2 class="lp-post-title"><?=$posts[2]->title?></h2>
            <img class="lp-post-img" src=" <?=$posts[2]->image?>" alt="">
            <h3> <?=$posts[2]->created_at?></h3>
            <div class="lp-post-content">
                <span class="lp-post-desc"> <?php echo substr($posts[2]->content, 0, 160) . "...";?></span>
                <form action="get" action="/postagens/post">
                    <input type="hidden" name="id" value="<?=$posts[2]->id?>">
                    <button type="submit" class="lp-button lp-post-goto">Saiba Mais!</button>
                </form>
            </div>
        </div>
        </div>
        
        <div class="lp-column">
        <div class="lp-post">
            <h2 class="lp-post-title"><?=$posts[3]->title?></h2>
            <img class="lp-post-img" src=" <?=$posts[3]->image?>" alt="">
            <h3> <?=$posts[3]->created_at?></h3>
            <div class="lp-post-content">
                <span class="lp-post-desc"> <?php echo substr($posts[3]->content, 0, 160) . "...";?></span>
                <form action="get" action="/postagens/post">
                <input type="hidden" name="id" value="<?=$posts[3]->id?>">
                <button type="submit" class="lp-button lp-post-goto">Saiba Mais!</button>
                </form>
            </div>
        </div>
        </div>


        <div class="lp-column">
        <div class="lp-post">
            <h2 class="lp-post-title"><?=$posts[4]->title?></h2>
            <img class="lp-post-img" src=" <?=$posts[4]->image?>" alt="">
            <h3> <?=$posts[4]->created_at?></h3>
            <div class="lp-post-content">
                <span class="lp-post-desc"> <?php echo substr($posts[4]->content, 0, 160) . "...";?></span>
                <form action="get" action="/postagens/post">
                <input type="hidden" name="id" value="<?=$posts[4]->id?>">
                <button type="submit" class="lp-button lp-post-goto">Saiba Mais!</button>
                </form>
            </div>
        </div>
        </div>
    </div>

    <?php require('app/views/site/footer.php'); ?>
    
</body>

</html>