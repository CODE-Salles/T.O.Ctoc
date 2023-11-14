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
    <title>Lista de usuários</title>
</head>

<body>
    <div class="topo">
            <img src="../../../../public/assets/logo.png" class="logo" alt="Logo">
    </div>
    

    <main>
        <div class="newUserBox">

            <img src="../../../../public/assets/imgcubo.png" class="cubo" alt="Logo"> 
            
            <button type="button" class="button blue mobile" id="action-new-user">Cadastrar Usuário</button>

        </div>

       

        <div class="tabela">
        <table>
            
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
                
                <?php foreach ($usuarios as $key => $user) : ?>
                <tr>   
                    <td><?=$user->name?></td>
                    <td><?=$user->email?></td>
                    <td>
                        <div class="botoes">
                            <img src="../../../../public/assets/visualizar.png" class="icon" alt="VisualizarIcon"> 
                            <button type="button" class="button yellow" id="action-show-user-<?= $user->id ?>" >Visualizar</button>
                            <img src="../../../../public/assets/editar.png" class="icon" alt="EditIcon"> 
                            <button type="button" class="button green" id="action-edit-user-<?= $user->id ?>">Editar</button>
                            <img src="../../../../public/assets/excluir.png" class="icon" alt="DeleteIcon"> 
                            <button type="button" class="button red" id="action-delete-user-<?= $user->id ?>" >Excluir</button>
                        </div>
                    </td>
                </tr>
                <?php endforeach ?>

            </tbody>

        </table>

        </div>

        <div class="mobile-listing">

            <div class="table-header">
                <h2>Usuários</h2>
            </div>

            <div class="accordion" id="accordionUserList">
               <?php foreach ($usuarios as $key => $user) : ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading_post_<?= $user->id ?>">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse_post_<?= $user->id ?>" aria-expanded="false" aria-controls="collapse_post_2">
                            <div class="accordion-button-infos">
                                <span><?=$user->name?></span>
                            </div>
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                    </h2>

                    <div id="collapse_post_<?= $user->id ?>" class="accordion-collapse collapse " aria-labelledby="heading_post_<?= $user->id ?>"
                        data-bs-parent="#accordionUserList">
                        <div class="accordion-body">

                            <div class="accordion_info_row">
                                <span class="label">Email:</span>
                                <span class="info"><?=$user->email?></span>
                            </div>


                            <div class="accordion_actions">
                                <button class="show"  id="action-show-user-<?= $user->id ?>">
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
        
        <div class="modal" id="modal">  
        
            <div class="modal-content" id="modal-new-user">
                    <div class="modal-header new-user">
                        <h2>Novo Usuário</h2>
                        <span class="modal-close" id="action-modalClose">&#10006;</span>
                    </div>
                    <form id="form" class="modal-form" method="POST" action="/">
                        <input type="text" id="nome" data-index="new" class="modal-field" placeholder="nome" required>
                        <input type="email" id="email" class="modal-field" placeholder="e-mail" required>

                        <div class="modal-footer">
                        <button id="salvar" class="button yellow" type="submit">Salvar</button>
                        <button id="action-modalClose" class="button cancel" type="reset">Cancelar</button>
                        </div>

                    </form>
                </div>

            <?php foreach ($usuarios as $key => $user) : ?>
            <div class="modal-content" id="modal-delete-user-<?=$user->id ?>">
                <div class="modal-header deleteuser">
                    <h2>Tem certeza que deseja excluir <?=$user->name ?> ?</h2>
                    <span class="modal-close" id="action-modalClose">&#10006;</span>
                </div>
                <form id="form" class="modal-form" method="POST" action="/">
                <input type="hidden" name="id" value="<?= $user->id ?>" />
                <div class="modal-footer del">
                    <button id="salvar" class="button yellow">Confirmar</button>
                    <button id="action-modalClose" class="button cancel" tyoe="reset">Cancelar</button>
                </div>
                </form>
            </div>

            
            
            <div class="modal-content" id="modal-edit-user-<?=$user->id ?>">
                <div class="modal-header">
                    <h2>Editar Usuário</h2>
                    <span class="modal-close" id="action-modalClose">&#10006;</span>
                </div>
                <form id="form" class="modal-form" method="POST" action="/">
                    <input type="text" id="name" data-index="new" class="modal-field" placeholder="nome" value="<?=$user->name ?>" required>
                    <input type="email" id="email" class="modal-field" placeholder="e-mail" value="<?=$user->email ?>"  required>
                    <input type="password" id="password" class="modal-field" placeholder="password" value="<?=$user->password ?>"  required>
                    <input type="hidden" name="id" value="<?= $user->id ?>" />

                    <div class="modal-footer">
                    <button id="salvar" class="button yellow" type="submit">Salvar</button>
                    <button id="action-modalClose" class="button cancel" type="reset">Cancelar</button>
                    </div>
                </form>
            </div>
            <div class="modal-content" id="modal-show-user-<?=$user->id ?>">
                <div class="modal-header">
                    <h2>Visualizar Usuário</h2>
                    <span class="modal-close" id="action-modalClose">&#10006;</span>
                </div>

                <form id="form" class="modal-form" method="POST" action="/">
                    <input type="text" id="name" data-index="new" class="modal-field" placeholder="nome" value="<?=$user->name ?>" disabled>
                    <input type="email" id="email" class="modal-field" placeholder="e-mail" value="<?=$user->email ?>" disabled>
                    <input type="password" id="password" class="modal-field" placeholder="password" value="<?=$user->password ?>" disabled>
                    <input type="hidden" name="id" value="<?= $user->id ?>" />

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