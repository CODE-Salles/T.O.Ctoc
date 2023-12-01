<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/reset.css">
    <link rel="stylesheet" href="../../../public/css/listingStyle.css">
    <link rel="stylesheet" href="../../../public/css/adminModals.css">
    <link rel="stylesheet" href="../../../public/css/usersList.css">
    <link rel="stylesheet" href="../../../public/css/accordion.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500&display=swap" rel="stylesheet">
    <title>Admin | Lista de Usuários</title>
</head>

<body>
    <header class="header">
        
        <?php require('app/views/admin/sidebar.php'); ?>

        <img src="../../../public/assets/logoFundoRemovido.png" class="header-logo" alt="Logo">

        <div class="newPostBox" id="newPostBox">

            <img src="../../../public/assets/cuboFundoRemovido.png" class="cubo" alt="Logo">

            <button type="button" class="button post" id="action-new-user">Novo Usuário</button>

        </div>

    </header>

    <main class="content">
        <div class="desktop-listing">
            <table class="d-table">
                <thead>
                    <tr>
                        <th>Usuário</th>
                        <th>E-mail</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($users as $key => $user) : ?>
                        <tr>
                            <td><?= $user->name ?></td>
                            <td><?= $user->email ?></td>
                            <td class="d-list-actions">
                                <button class="button show" id="action-show-user-<?= $user->id ?>"><i class="fa-solid fa-book-open"></i>
                                    Visualizar</button>
                                <button class="button edit" id="action-edit-user-<?= $user->id ?>"><i class="fa-regular fa-pen-to-square"></i> Editar</button>
                                <button class="button delete" id="action-delete-user-<?= $user->id ?>"><i class="fa-solid fa-trash"></i>
                                    Excluir</button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>

            </table>
        </div>

        <div class="mobile-listing">

            <div class="table-header">
                <h2>Posts</h2>
            </div>

            <div class="accordion" id="accordionUserList">
                <?php foreach ($users as $key => $user) : ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_post_<?= $user->id ?>">
                            <button class="accordion-button first" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_post_<?= $user->id ?>" aria-expanded="false" aria-controls="collapse_post_<?= $user->id ?>">
                                <div class="accordion-button-infos">
                                    <span><?= $user->name ?></span>
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </button>
                        </h2>

                        <div id="collapse_post_<?= $user->id ?>" class="accordion-collapse collapse " aria-labelledby="heading_post_<?= $user->id ?>" data-bs-parent="#accordionUserList">
                            <div class="accordion-body">

                                <div class="accordion_info_row">
                                    <span class="label">Email:</span>
                                    <span class="info"><?= $user->email ?></span>
                                </div>

                                <div class="accordion_actions">
                                    <button class="show" id="action-show-user-<?= $user->id ?>">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                    <button class="edit" id="action-edit-user-<?= $user->id ?>">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button class="delete" id="action-delete-user-<?= $user->id ?>">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>


        </div>

    </main>

    <div class="modal" id="modal">

        <div class="modal-content" id="modal-new-user">
            <div class="modal-header">
                <h2>Novo Usuário</h2>
                <span class="modal-close" id="action-modalClose">&#10006;</span>
            </div>

            <form id="form" class="modal-form" method="post" action="/admin/users/create">

                <div class="form-row">
                    <label for="name" class="modal-label">Nome</label>
                    <input type="text" id="name" name="name" class="modal-field" required>
                </div>

                <div class="form-row">
                    <label for="email" class="modal-label">E-mail</label>
                    <input type="email" name="email" id="email" class="modal-field" required>
                </div>

                <div class="form-row">
                    <label for="password" class="modal-label">Senha</label>
                    <input type="password" name="password" id="password" class="modal-field" required>
                </div>

                <div class="form-row">
                    <label for="confirmPassword" class="modal-label">Confirmar Senha</label>
                    <input type="password" name="confirmPassword" id="confirmPassword" class="modal-field" required>
                </div>

                <div class="modal-footer">
                    <button id="salvar" type="submit" class="button confirm">Salvar</button>
                    <button id="cancelar" class="button cancel">Cancelar</button>
                </div>
            </form>
        </div>

        <?php foreach ($users as $key => $user) : ?>
            <div class="modal-content " id="modal-delete-user-<?= $user->id ?>">

                <div class="modal-header">
                    <h2>Exclusão de Usuário</h2>
                    <span class="modal-close" id="action-modalClose">&#10006;</span>
                </div>

                <form id="form" class="modal-form modal-delete" method="post" action="/admin/users/delete">
                    <div class="form-row">
                            <span>Tem certeza que deseja excluir <?= $user->name ?>?</span>
                    </div>
                    <input type="hidden" name="id" value="<?= $user->id ?>" />
                    <div class="modal-footer">
                        <button id="salvar" type="submit" class="button confirm">Salvar</button>
                        <button id="action-modalClose" type="reset" class="button cancel">Cancelar</button>
                    </div>
                </form>
            </div>

            <div class="modal-content" id="modal-edit-user-<?= $user->id ?>">
                <div class="modal-header">
                    <h2>Editar Usuário</h2>
                    <span class="modal-close" id="action-modalClose">&#10006;</span>
                </div>
                <form id="form" class="modal-form" method="post" action="/admin/users/edit">
                    <div class="form-row">
                        <label for="name" class="modal-label">Nome</label>
                        <input type="text" id="name" name="name" value="<?= $user->name ?>" class="modal-field" required>
                    </div>

                    <div class="form-row">
                        <label for="email" class="modal-label">E-mail</label>
                        <input type="email" name="email" id="email" value="<?= $user->email ?>" class="modal-field" required>
                    </div>

                    <div class="form-row">
                        <label for="password" class="modal-label">Nova Senha</label>
                        <input type="password" name="password" id="password" value="<?= $user->password ?>" class="modal-field" required>
                    </div>

                    <div class="form-row">
                        <label for="password" class="modal-label">Confirmar Nova Senha</label>
                        <input type="password" name="password" id="password" value="<?= $user->password ?>" class="modal-field" required>
                    </div>
                    <input type="hidden" name="id" value="<?= $user->id ?>" />
                    <div class="modal-footer">
                        <button id="salvar" type="submit" class="button confirm">Salvar</button>
                        <button id="action-modalClose" type="reset" class="button cancel">Cancelar</button>
                    </div>
                </form>
            </div>

            <div class="modal-content" id="modal-show-user-<?= $user->id ?>">
                <div class="modal-header">
                    <h2>Visualizar Usuário</h2>
                    <span class="modal-close" id="action-modalClose">&#10006;</span>
                </div>
                <form id="form" class="modal-form">
                    <div class="form-row">
                        <label for="name" class="modal-label">Nome</label>
                        <input type="text" id="name" name="name" value="<?= $user->name ?>" class="modal-field" disabled>
                    </div>

                    <div class="form-row">
                        <label for="email" class="modal-label">E-mail</label>
                        <input type="email" name="email" id="email" value="<?= $user->email ?>" class="modal-field" disabled>
                    </div>

                    <div class="form-row">
                        <label for="password" class="modal-label">Senha</label>
                        <input type="password" name="password" id="password" value="<?= $user->password ?>" class="modal-field" disabled>
                    </div>
                    <input type="hidden" name="id" value="<?= $user->id ?>" />
                    <div class="modal-footer">
                        <button id="action-modalClose" type="reset" class="button cancel">Fechar</button>
                    </div>
                </form>
            </div>
        <?php endforeach ?>
    </div>

    <script src="https://kit.fontawesome.com/5d993ad3fb.js" crossorigin="anonymous"></script>
    <script src="../../../public/js/modals.js"></script>
    <script src="../../../public/js/accordion.js"></script>
</body>

</html>