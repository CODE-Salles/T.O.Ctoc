<!DOCTYPE html>
<html lang="pt-br">

<html>


    <head>
        <meta charset="utf-8">

        <title><?=$posts[0]->title?></title>
        <link rel="stylesheet" href="../../../public/css/postIndividual.css">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500&display=swap" rel="stylesheet">
        <?php
            $cores = [
                'laranja' => ['bg' => 'BGLaranja', 
                            'border' => 'rgba(254, 80, 0, 0.60);'],
                'verde' => ['bg' => 'BGVerde', 
                            'border' => '#009a44'],
                'amarelo' => ['bg' => 'BGAmarelo', 
                            'border' => '#ffd700'],
                'azul' => ['bg' => 'BGAzul', 
                        'border' => '#003da5'],
            ];


            $colorIndex = array_rand($cores);
            $cor = $cores[$colorIndex];
        ?>


        <style>
        .exemplo{
            border-left: 37.077px solid <?=$cor['border']?>;
        }

        body{
            background-image: url('../../public/assets/<?=$cor['bg']?>.png');
        }
        
        </style>
    </head>

    <body>
       <?php require('app/views/site/navbar.php'); ?>

       <main> 
            <div class="direita exemplo">
                <div class="titulos">
                
                    <h2>Think outside the cube</h2>
                    <h1 title="Título do Artigo"><?=$posts[0]->title?></h1>
                    <img src="../<?=$posts[0]->image?>" alt="Ernő Rubik, criador do cubo mágico">
                    <h3><?=$posts[0]->created_at?></h3>

                </div>
                
                <div class="texto">
                    <h3>    
                        <?=$posts[0]->content?>
                    </h3>
                </div>
            </div>
        </main>
        <?php require('app/views/site/footer.php'); ?>
    </body>

</html>