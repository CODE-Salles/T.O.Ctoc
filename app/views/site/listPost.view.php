<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Lista de posts TocToc</title>
    <meta charset="UTF-8">
    <meta name="description" content="lista de posts organizados e com barra de pesquisar">
    <meta name="author" content="Daniel Alves Thielmann">
    <meta name="keywords" content="lista,posts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/listPost.css">
</head>

<body>
    <?php require('app/views/site/navbar.php'); ?>

    <main>

        <section class="barra_pesquisa">
            <form class="search-form" action="postagens" method="GET">
                <div class="search-container">
                    <input type="text" name="search" id="searchInput" placeholder="Pesquisar">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </section>

        <?php if (!isset($_GET['search'])) : ?>
        <section class="postSection">
            <div class="postPrincipal">
                <img class="imagemPrincipal" src="https://i.pinimg.com/originals/88/6c/29/886c2938c5c01eb846092c4bc9bc789d.gif">
                <h2>SOBRE O CUBO MÁGICO</h2>
                <p>Data da Postagem: 16/10/2023</p>
                <p>Exploramos a origem, estrutura e características do icônico Cubo Mágico, também conhecido como Cubo de Rubik.</p>
            </div>
        </section>
        <?php endif ;?>    

        <div id="postList">
            <section class="postSection">

                <?php foreach ($posts as $key => $post) : ?>


                    <div class="post" data-post-id="<?=$post->id?>">
                        <img class="imagemPadrao" src="../../../<?=$post->image?>">
                        <h2><?=$post->title?></h2>
                        <p>Data da Postagem: <?=$post->created_at?></p>
                        <p><?php echo substr($post->content, 0, 60) . "...";?></p>
                        <form method="get" action="/postagens/post">
                        <input type="hidden" name="id" value="<?=$post->id?>">
                        <button type="submit" class="see-post-button">Saiba Mais!</button>
                        </form>
                    </div>

                    <?php if ($key == 2) : ?>
                        <section id="metadeTela">
                            <div class="container">
                                <h1>THINK OUTSIDE THE CUBE</h1>
                            </div>
                        </section>
                    <?php endif; ?>

                <?php endforeach ;?>

            </section>
        </div>

        <div class="pagination">
            <a href="?pagina=<?= $page > 1 ? $page - 1 : 1 ?>" class="pagination-box-link pagination-box-link--active">&laquo;</a>

            <?php for ($page_number = 1; $page_number <= $total_pages; $page_number++) : ?>
                <a href="?pagina=<?= $page_number ?> " class="pagination-box-link <?= $page_number == $page ? "pagination-box-link--active" : "" ?> ">
                    <?= $page_number ?>
                </a>
            <?php endfor; ?>
            <a href="?pagina=<?= $page < $total_pages ? $page + 1 : $total_pages ?>" class="pagination-box-link pagination-box-link--active">&raquo;</a>
        </div>
    </main>

    <?php require('app/views/site/footer.php'); ?>

</body>

</html>