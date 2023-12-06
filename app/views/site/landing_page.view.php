<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <link rel="stylesheet" href="../../../public/css/landing_page.css">
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
                    <h3 class="lp-post-date">Data: <?=$posts[0]->created_at?></h3>
                    <div class="lp-post-content">
                        <span class="lp-post-desc"> <?php echo substr($posts[0]->content, 0, 160) . "...";?></span>
                        <form method="get" action="/postagens/post">
                            <input type="hidden" name="id" id="id" value="<?=$posts[0]->id?>">
                            <button type="submit" class="lp-button lp-post-goto">Saiba Mais!</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="lp-column">

                <div class="special-card">
                    <div class="special-card-bg">

                        <form method="get" action="/postagens/post">
                            <input type="hidden" value="<?=$fixed['first'][0]->id?>" name="id">
                            <button type="submit"  class="lp-button">
                            <?=$fixed['first'][0]->title?>
                            </button>
                        </form>

                        <form method="get" action="/postagens/post">
                            <input type="hidden" value="<?=$fixed['second'][0]->id?>" name="id">
                            <button type="submit"  class="lp-button">
                            <?=$fixed['second'][0]->title?>
                            </button>
                        </form>

                    </div>
                </div>

                <div class="image-card">
                    <img class="middle-image" src="../../../public/assets/toctoc.png">
                </div>

                <div class="special-card">
                    <div class="special-card-bg">
                    <form method="get" action="/postagens/post">
                            <input type="hidden" value="<?=$fixed['third'][0]->id?>" name="id">
                            <button type="submit"  class="lp-button">
                            <?=$fixed['third'][0]->title?>
                            </button>
                        </form>
                        <form method="get" action="/postagens/post">
                            <input type="hidden" value="<?=$fixed['fourth'][0]->id?>" name="id">
                            <button type="submit"  class="lp-button">
                            <?=$fixed['fourth'][0]->title?>
                            </button>
                        </form>
                    </div>    
                </div>
            </div>


            <div class="lp-column">
            <div class="lp-post">
                    <h2 class="lp-post-title"><?=$posts[1]->title?></h2>
                    <img class="lp-post-img" src=" <?=$posts[1]->image?>" alt="">
                    <h3 class="lp-post-date">Data: <?=$posts[1]->created_at?></h3>
                    <div class="lp-post-content">
                        <span class="lp-post-desc"> <?php echo substr($posts[1]->content, 0, 160) . "...";?></span>
                        <form method="get" action="/postagens/post">
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
   

    <div class="lp-second-section">
        <div class="lp-column">
        <div class="lp-post">
            <h2 class="lp-post-title"><?=$posts[2]->title?></h2>
            <img class="lp-post-img" src=" <?=$posts[2]->image?>" alt="">
            <h3 class="lp-post-date">Data: <?=$posts[2]->created_at?></h3>
            <div class="lp-post-content">
                <span class="lp-post-desc"> <?php echo substr($posts[2]->content, 0, 160) . "...";?></span>
                <form method="get" action="/postagens/post">
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
            <h3 class="lp-post-date">Data: <?=$posts[3]->created_at?></h3>
            <div class="lp-post-content">
                <span class="lp-post-desc"> <?php echo substr($posts[3]->content, 0, 160) . "...";?></span>
                <form method="get" action="/postagens/post">
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
            <h3 class="lp-post-date">Data: <?=$posts[4]->created_at?></h3>
            <div class="lp-post-content">
                <span class="lp-post-desc"> <?php echo substr($posts[4]->content, 0, 160) . "...";?></span>
                <form method="get" action="/postagens/post">
                <input type="hidden" name="id" value="<?=$posts[4]->id?>">
                <button type="submit" class="lp-button lp-post-goto">Saiba Mais!</button>
                </form>
            </div>
        </div>
        </div>
    </div>


    <div class="button_readmore">
        <a href="/postagens">Ler mais!</a>
        <span><i class="fa-solid fa-angles-down"></i></span>
    </div>

    </main>
    <?php require('app/views/site/footer.php'); ?>
    
</body>

</html>