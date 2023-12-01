<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/reset.css">
    <link rel="stylesheet" href="../../../public/css/listingStyle.css">
    <link rel="stylesheet" href="../../../public/css/adminModals.css">
    <link rel="stylesheet" href="../../../public/css/postslist.css">
    <link rel="stylesheet" href="../../../public/css/accordion.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500&display=swap" rel="stylesheet">
    <title>Admin | Lista de Posts</title>
</head>

<body>
    <header class="header">

        <?php require('app/views/admin/sidebar.php'); ?>

        <img src="../../../public/assets/logoFundoRemovido.png" class="header-logo" alt="Logo">

        <div class="newPostBox" id="newPostBox">

            <img src="../../../public/assets/cuboFundoRemovido.png" class="cubo" alt="Logo">

            <button type="button" class="button post" id="action-new-post">Criar Novo Post</button>

        </div>

    </header>

    <main class="content">
        <!-- Tabela impressas na versão Desktop -->
        <div class="desktop-listing">
            <table class="d-table">
                <thead>
                    <tr>
                        <th>Post</th>
                        <th>Autor</th>
                        <th>Data</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($posts as $key => $post) : ?>
                        <tr>
                            <td><?=$post->title?></td>
                            <td><?=$post->author?></td>
                            <td><?=$post->created_at?></td>
                            <td class="d-list-actions">
                                <button class="button show" id="action-show-post-<?=$post->id?>"><i class="fa-solid fa-book-open"></i>
                                    Visualizar</button>
                                <button class="button edit" id="action-edit-post-<?=$post->id?>"><i
                                        class="fa-regular fa-pen-to-square"></i> Editar</button>
                                <button class="button delete" id="action-delete-post-<?=$post->id?>"><i class="fa-solid fa-trash"></i>
                                    Excluir</button>
                            </td>
                        </tr>
                    <?php endforeach?>
                </tbody>

            </table>
        </div>

        <!-- Tabela impressas na versão Mobile -->
        <div class="mobile-listing">

            <div class="table-header">
                <h2>Posts</h2>
            </div>

            <div class="accordion" id="accordionUserList">
                <!-- Accordion #1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading_post_1">
                        <button class="accordion-button first" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse_post_1" aria-expanded="false" aria-controls="collapse_post_1">
                            <div class="accordion-button-infos">
                                <span>Título do Post</span>
                                <span>Breve descrição do post</span>
                            </div>
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                    </h2>

                    <div id="collapse_post_1" class="accordion-collapse collapse " aria-labelledby="heading_post_1"
                        data-bs-parent="#accordionUserList">
                        <div class="accordion-body">

                            <div class="accordion_info_row">
                                <span class="label">Autor:</span>
                                <span class="info">Saulo Surerus</span>
                            </div>

                            <div class="accordion_info_row">
                                <span class="label">Data:</span>
                                <span class="info">23/09/2023</span>
                            </div>

                            <div class="accordion_actions">
                                <button class="show" id="action-show-post-1">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="edit" id="action-edit-post-1">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="delete" id="action-delete-post-1">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion #2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading_post_2">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse_post_2" aria-expanded="false" aria-controls="collapse_post_2">
                            <div class="accordion-button-infos">
                                <span>Título do Post</span>
                                <span>Breve descrição do post</span>
                            </div>
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                    </h2>

                    <div id="collapse_post_2" class="accordion-collapse collapse " aria-labelledby="heading_post_2"
                        data-bs-parent="#accordionUserList">
                        <div class="accordion-body">

                            <div class="accordion_info_row">
                                <span class="label">Autor:</span>
                                <span class="info">Pedro Muniz</span>
                            </div>

                            <div class="accordion_info_row">
                                <span class="label">Data:</span>
                                <span class="info">25/11/2023</span>
                            </div>

                            <div class="accordion_actions">
                                <button class="show">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="delete">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </main>

    <!-- Modais -->
    <div class="modal" id="modal">
        <!-- Modal de Criação -->
        <div class="modal-content" id="modal-new-post">
            <div class="modal-header">
                <h2>Novo Post</h2>
                <span class="modal-close" id="action-modalClose">&#10006;</span>
            </div>

            <form id="form" class="modal-form" enctype="multipart/form-data" method="POST" action="/admin/posts/create">

                <div class="form-row">
                    <label for="title" class="modal-label">Título</label>
                    <input type="text" id="title" name="title" class="modal-field" required>
                </div>

                <div class="form-row">
                    <label for="date" class="modal-label">Data da Postagem</label>
                    <input type="date" name="date" id="date" class="modal-field" required>
                </div>

                <div class="form-row">
                    <label for="image" class="modal-label">Imagem</label>
                    <input type="file" name="image" id="image" class="modal-field" required>
                </div>

                <div class="form-row">
                    <label for="author" class="modal-label">Autor</label>
                    <input type="text" name="author" id="author" class="modal-field" required>
                </div>

                <div class="form-row">
                    <label for="content" class="modal-label">Conteúdo</label>
                    <textarea id="content" name="content" cols="30" rows="10"></textarea>
                </div>

                <div class="modal-footer">
                    <button id="salvar" type="submit" class="button confirm">Salvar</button>
                    <button id="cancelar" class="button cancel">Cancelar</button>
                </div>
            </form>
        </div>

        <?php foreach ($posts as $key => $post) : ?>

        <!-- Modal de Deleção -->
        <div class="modal-content" id="modal-delete-post-<?=$post->id?>">

            <div class="modal-header">
                <h2>Exclusão de Post</h2>
                <span class="modal-close" id="action-modalClose">&#10006;</span>
            </div>

            <form id="form" class="modal-form modal-delete" method="POST" action="/admin/posts/delete">
                <div class="form-row">
                    <span>Tem certeza que deseja excluir este post?</span>
                    <span>"<?=$post->title?>"</span>
                </div>
                <input type="hidden" name="id" value="<?= $post->id ?>" />
                <div class="modal-footer">
                    <button id="salvar" type="submit" class="button confirm">Salvar</button>
                    <button id="action-modalClose" type="reset" class="button cancel">Cancelar</button>
                </div>
            </form>
        </div>

        <!-- Modal de Edição -->
        <div class="modal-content" id="modal-edit-post-<?=$post->id?>">
            <div class="modal-header">
                <h2>Editar Post</h2>
                <span class="modal-close" id="action-modalClose">&#10006;</span>
            </div>
            <form id="form" class="modal-form" enctype="multipart/form-data" method="POST" action="/admin/posts/edit">
                <div class="form-row">
                    <label for="title" class="modal-label">Título</label>
                    <input type="text" id="title" name="title" class="modal-field" value="<?=$post->title?>" required>
                </div>

                <div class="form-row">
                    <label for="date" class="modal-label">Data da Postagem</label>
                    <input type="date" name="date" id="date" class="modal-field" value="<?=$post->created_at?>"required>
                </div>

                <div class="form-row">
                    <label for="image" class="modal-label">Imagem</label>
                    <input type="file" name="image" id="image" class="modal-field">
                </div>

                <div class="form-row">
                    <label for="author" class="modal-label">Autor</label>
                    <input type="text" name="author" id="author" class="modal-field" value="<?=$post->author?>" required>
                </div>

                <div class="form-row">
                    <label for="content" class="modal-label">Conteúdo</label>
                    <textarea id="title" name="content" cols="30" rows="10"><?=$post->content?></textarea>
                </div>
                <input type="hidden" name="id" value="<?= $post->id ?>" />
                <div class="modal-footer">
                    <button id="salvar" type="submit" class="button confirm">Salvar</button>
                    <button id="action-modalClose" type="reset" class="button cancel">Cancelar</button>
                </div>
            </form>
        </div>

        <!-- Modal de Visualização -->
        <div class="modal-content" id="modal-show-post-<?=$post->id?>">
            <div class="modal-header">
                <h2>Visualizar Post</h2>
                <span class="modal-close" id="action-modalClose">&#10006;</span>
            </div>
            <form id="form" class="modal-form">
                <div class="form-row">
                    <label for="title" class="modal-label">Título</label>
                    <input type="text" id="title" name="title" class="modal-field" value="<?=$post->title?>" disabled>
                </div>

                <div class="form-row">
                    <label for="date" class="modal-label">Data da Postagem</label>
                    <input type="date" name="date" id="date" class="modal-field" value="<?=$post->created_at?>" disabled>
                </div>

                <div class="form-row">
                    <div>
                        <input type="text" class="modal-field" value="../../../<?=$post->image?>" disabled>
                        <img class="modal-show-img" src="../../../<?=$post->image?>" alt="">
                    </div> 
                </div>

                <div class="form-row">
                    <label for="author" class="modal-label">Autor</label>
                    <input type="text" name="author" id="author" class="modal-field" value="<?=$post->author?>" disabled>
                </div>

                <div class="form-row">
                    <label for="content" class="modal-label">Conteúdo</label>
                    <textarea id="title" name="content" cols="30" rows="10" disabled><?=$post->content?></textarea>
                </div>
                <input type="hidden" name="id" value="<?= $post->id ?>" />
                <div class="modal-footer">
                    <button id="salvar" type="submit" class="button confirm">Salvar</button>
                    <button id="action-modalClose" type="reset" class="button cancel">Cancelar</button>
                </div>
            </form>
        </div>

        <?php endforeach ?>
    </div>

    
    <!-- Import de Arquivos JS -->

    <script src="https://kit.fontawesome.com/5d993ad3fb.js" crossorigin="anonymous"></script>
    <script src="../../../public/js/modals.js"></script>
    <script src="../../../public/js/accordion.js"></script>
</body>

</html>