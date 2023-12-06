<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amethysta&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../public/css/listausuarios.css">
    <link rel="stylesheet" href="../../../../public/css/accordion.css">
    <script src="../../../../public/js/modals.js" defer></script>
    <script src="../../../../public/js/accordion.js" defer></script>
    <script src="https://kit.fontawesome.com/5d993ad3fb.js" crossorigin="anonymous" defer></script>
    <title>Lista de postagens</title>
</head>

<body>
    <?php require('app/views/admin/sidebar.php'); ?>

    <div class="topo">
        <img src="../../../../public/assets/logo.png" class="logo" alt="Logo">
    </div>

    <main>
        <div class="newUserBox">
            <img src="../../../../public/assets/imgcubo.png" class="cubo" alt="Logo">
            <button type="button" class="button blue mobile" id="action-new-post">Cadastrar Postagem</button>
        </div>

        <div class="tabela">
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Data</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($posts as $key => $post) : ?>
                        <tr>
                            <td><?= $post->title ?></td>
                            <td class="pl-autor"><?php foreach ($users as $user):
                                if ($user->id == $post->author)
                                    echo $user->name; endforeach; ?>
                            </td>
                            <td class="pl-date"><?= $post->created_at ?></td>
                            <td>
                                <div class="botoes">
                                    
                                    <button type="button" class="button yellow" id="action-show-post-<?= $post->id ?>"><img src="../../../../public/assets/visualizar.png" class="icon" alt="VisualizarIcon"><span>Visualizar</span></button>
                                    
                                    <button type="button" class="button green" id="action-edit-post-<?= $post->id ?>"><img src="../../../../public/assets/editar.png" class="icon" alt="EditIcon"><span>Editar</span></button>
                    
                                    <button type="button" class="button red" id="action-delete-post-<?= $post->id ?>"><img src="../../../../public/assets/excluir.png" class="icon" alt="DeleteIcon"><span>Excluir</span></button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

        <div class="mobile-listing">
            <div class="table-header">
                <h2>Postagens</h2>
            </div>

            <div class="accordion" id="accordionUserList">
                <?php foreach ($posts as $key => $post) : ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_post_<?= $post->id ?>">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_post_<?= $post->id ?>" aria-expanded="false" aria-controls="collapse_post_<?= $post->id ?>">
                                <div class="accordion-button-infos">
                                    <span><?= $post->title ?></span>
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </button>
                        </h2>

                        <div id="collapse_post_<?= $post->id ?>" class="accordion-collapse collapse " aria-labelledby="heading_post_<?= $post->id ?>"
                            data-bs-parent="#accordionUserList">
                            <div class="accordion-body">
                                <div class="accordion_info_row">
                                    <span class="label">Autor:</span>
                                    <span class="info">
                                        <?php foreach ($users as $user):
                                        if ($user->id == $post->author)
                                        echo $user->name; endforeach; ?>
                                    </span>
                                    <span class="label">Data:</span>
                                    <span class="label"><?= $post->created_at ?></span>
                                </div>

                                <div class="accordion_actions">
                                    <button class="show" id="action-show-post-<?= $post->id ?>">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                    <button class="edit" id="action-edit-post-<?= $post->id ?>">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button class="delete" id="action-delete-post-<?= $post->id ?>">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="modal" id="modal">
            <div class="modal-content" id="modal-new-post">
                <div class="modal-header new-post">
                    <h2>Nova Postagem</h2>
                    <span class="modal-close" id="action-modalClose">&#10006;</span>
                </div>
                <form id="form" class="modal-form" method="POST" enctype="multipart/form-data" action="/admin/posts/create">
                    <input type="text" id="title" name="title" data-index="new" class="modal-field" placeholder="Título" required>
                    <label for="date" class="modal-label">Data de Criação</label>
                    <input type="date" id="date" name="date" class="modal-field" required>
                    <label for="image" class="modal-label">Imagem da Postagem</label>
                    <input type="file" id="image" name="image" class="modal-field" required>
                    <label class="modal-label" for="autor">Autor:</label>
                    <select name="author" id="author" class="modal-field" required>
                        <?php foreach ($users as $user): ?>
                            <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="content" class="modal-label">Conteúdo</label>
                    <textarea id="content" name="content" cols="30" rows="10" class="modal-field post-content   "></textarea>

                    <div class="modal-footer">
                        <button id="salvar" class="button yellow" type="submit">Salvar</button>
                        <button id="action-modalClose" class="button cancel" type="reset">Cancelar</button>
                    </div>
                </form>
            </div>

            <?php foreach ($posts as $key => $post) : ?>
                <div class="modal-content" id="modal-delete-post-<?= $post->id ?>">
                    <div class="modal-header deleteuser">
                        <h2>Tem certeza que deseja excluir</h2>
                        <h2> <?= $post->title ?> ?</h2>
                        <span class="modal-close" id="action-modalClose">&#10006;</span>
                    </div>
                    <form id="form" class="modal-form" method="POST" action="/admin/posts/delete">
                        <input type="hidden" name="id" value="<?= $post->id ?>" />
                        <div class="modal-footer del">
                            <button id="salvar" class="button yellow">Confirmar</button>
                            <button id="action-modalClose" class="button cancel" type="reset">Cancelar</button>
                        </div>
                    </form>
                </div>

                <div class="modal-content" id="modal-edit-post-<?= $post->id ?>">
                    <div class="modal-header">
                        <h2>Editar Postagem</h2>
                        <span class="modal-close" id="action-modalClose">&#10006;</span>
                    </div>
                    <form id="form" class="modal-form" method="POST" enctype="multipart/form-data" action="/admin/posts/edit">
                        <input type="text" id="title" name="title" data-index="new" class="modal-field" placeholder="Título" value="<?= $post->title ?>" required>
                        <label for="date" class="modal-label">Data de Criação</label>
                        <input type="date" id="date" name="date" class="modal-field" value="<?=$post->created_at?>" required>
                        <label for="image" class="modal-label">Imagem da Postagem</label>
                        <input type="file" id="image" name="image" class="modal-field">
                        <label class="modal-label" for="autor">Autor:</label>
                        <select name="author" id="author" class="modal-field" required>
                            <option
                                value="<?php foreach ($users as $user):
                                    if ($user->id == $post->author)
                                        echo $user->id; endforeach; ?>">
                                <?php foreach ($users as $user):
                                    if ($user->id == $post->author)
                                        echo $user->name; endforeach; ?></option>
                            <?php foreach ($users as $user): ?>
                                <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="content" class="modal-label">Conteúdo</label>
                        <textarea id="content" name="content" cols="30" rows="10" class="modal-field post-content"><?=$post->content?></textarea>
                        <input type="hidden" name="id" value="<?= $post->id ?>" />
                        <div class="modal-footer">
                            <button id="salvar" class="button yellow" type="submit">Salvar</button>
                            <button id="action-modalClose" class="button cancel" type="reset">Cancelar</button>
                        </div>
                    </form>
                </div>

                <div class="modal-content" id="modal-show-post-<?= $post->id ?>">
                    <div class="modal-header">
                        <h2>Visualizar Postagem</h2>
                        <span class="modal-close" id="action-modalClose">&#10006;</span>
                    </div>

                    <form id="form" class="modal-form" method="POST" action="/">
                        <input type="text" id="title" name="title" data-index="new" class="modal-field" placeholder="Título" value="<?= $post->title ?>" disabled>
                        <label for="date" class="modal-label">Data de Criação</label>
                        <input type="date" id="date" name="date" class="modal-field" value="<?=$post->created_at?>" disabled>
                        <label for="image" class="modal-label">Imagem da Postagem</label>
                        <img src="../<?=$post->image?>" alt="">
                        <label class="modal-label" for="autor">Autor:</label>
                        <select name="autor" id="autor" class="modal-field" disabled>
                            <option
                                value="<?php foreach ($users as $user):
                                    if ($user->id == $post->author)
                                        echo $user->id; endforeach; ?>">
                                <?php foreach ($users as $user):
                                    if ($user->id == $post->author)
                                        echo $user->name; endforeach; ?></option>
                            <?php foreach ($users as $user): ?>
                                <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="content" class="modal-label">Conteúdo</label>
                        <textarea id="content" name="content" cols="30" rows="10" class="modal-field post-content" disabled><?=$post->content?></textarea>
                        <input type="hidden" name="id" value="<?= $post->id ?>" />
                    </form>
                </div>
            <?php endforeach ?>
        </div>
    </main>

    <div class="baixo">
        <footer>
            Think Outside The Cube
        </footer>
    </div>
</body>

</html>
