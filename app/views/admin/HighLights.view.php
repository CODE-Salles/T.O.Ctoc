<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5d993ad3fb.js" crossorigin="anonymous" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Amethysta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/highlights.css">
    <title>Posts Fixados</title>
</head>
<body>
<?php require('app/views/admin/sidebar.php'); ?>
    <form class="select-posts" method="POST" action="/admin/highlights/edit">
        <div class="lpage-options">

            <h2>Selecione os 4 posts dos card especiais da página inicial</h2>
            <label class="option-title" for="special_up1">Primeiro card superior</label>
            <select name="special_up1" id="special_up1" class="" required>
                        <option value="<?=$fixeds[0]->special_up1?>">
                        <?php foreach($posts as $post): 
                            if($fixeds[0]->special_up1 == $post->id){echo $post->title;}
                        endforeach;?>
                        </option>
                        <?php foreach ($posts as $post): ?>
                            <?php if($fixeds[0]->special_up1 != $post->id): ?>
                                <option value="<?=$post->id?>">
                                    <?=$post->title?>
                                </option>
                            <?php endif ;?>
                        <?php endforeach ?>
            </select>

            <label class="option-title" for="special_up2">Segundo card superior</label>
            <select name="special_up2" id="special_up2" class="" required>
                        <option value="<?=$fixeds[0]->special_up2?>">
                        <?php foreach($posts as $post): 
                            if($fixeds[0]->special_up2 == $post->id){echo $post->title;}
                        endforeach;?>
                        </option>
                        <?php foreach ($posts as $post): ?>
                            <?php if($fixeds[0]->special_up2 != $post->id): ?>
                                <option value="<?=$post->id?>">
                                    <?=$post->title?>
                                </option>
                            <?php endif ;?>
                        <?php endforeach ?>
            </select>

            <label class="option-title" for="special_up2">Primeiro card inferior</label>
            <select name="special_down1" id="special_down1" class="" required>
                        <option value="<?=$fixeds[0]->special_down1?>">
                        <?php foreach($posts as $post): 
                            if($fixeds[0]->special_down1 == $post->id){echo $post->title;}
                        endforeach;?>
                        </option>
                        <?php foreach ($posts as $post): ?>
                            <?php if($fixeds[0]->special_down1 != $post->id): ?>
                                <option value="<?=$post->id?>">
                                    <?=$post->title?>
                                </option>
                            <?php endif ;?>
                        <?php endforeach ?>
            </select>

            <label class="option-title" for="special_up2">Segundo card inferior</label>
            <select name="special_down2" id="special_down2" class="" required>
                        <option value="<?=$fixeds[0]->special_down2?>">
                        <?php foreach($posts as $post): 
                            if($fixeds[0]->special_down2 == $post->id){echo $post->title;}
                        endforeach;?>
                        </option>
                        <?php foreach ($posts as $post): ?>
                            <?php if($fixeds[0]->special_down2 != $post->id): ?>
                                <option value="<?=$post->id?>">
                                    <?=$post->title?>
                                </option>
                            <?php endif ;?>
                        <?php endforeach ?>
            </select>

        </div>

        <div class="lpost-option">
            <h2>Selecione o Post Principal da Lista de Posts</h2>
            <label class="option-title" for="special_up2">Post Principal Lista de Posts</label>
            <select name="mainpost" id="mainpost" class="" required>
                        <option value="<?=$fixeds[0]->mainpost?>">
                        <?php foreach($posts as $post): 
                            if($fixeds[0]->mainpost == $post->id){echo $post->title;}
                        endforeach;?>
                        </option>
                        <?php foreach ($posts as $post): ?>
                            <?php if($fixeds[0]->mainpost != $post->id): ?>
                                <option value="<?=$post->id?>">
                                    <?=$post->title?>
                                </option>
                            <?php endif ;?>
                        <?php endforeach ?>
            </select>
        </div>

        <div class="actions">
            <button type="submit">Salvar</button>
        </div>

    </form>
</body>
</html>