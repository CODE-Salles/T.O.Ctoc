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
    <script src="../../../../public/js/listausuarios.js" defer></script>
    <title>Lista de usuários</title>
</head>

<body>
    <div class="topo">
            <img src="../../../../public/assets/logo.png" class="logo" alt="Logo">
    </div>
    

    <main>
        <div class="newUserBox">

            <img src="../../../../public/assets/imgcubo.png" class="cubo" alt="Logo"> 
            
            <button type="button" class="button blue mobile" id="cadastrarCliente">Cadastrar Usuário</button>

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
                <tr>
                    <td>Felipe</td>
                    <td>felipe@toctoc.com.br</td>
                    <td>
                        <div class="botoes">
                            <img src="../../../../public/assets/visualizar.png" class="icon" alt="VisualizarIcon"> 
                            <button type="button" class="button yellow" id="visualizar" >Visualizar</button>
                            <img src="../../../../public/assets/editar.png" class="icon" alt="EditIcon"> 
                            <button type="button" class="button green" id="edit">Editar</button>
                            <img src="../../../../public/assets/excluir.png" class="icon" alt="DeleteIcon"> 
                            <button type="button" class="button red" id="delete" >Excluir</button>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>Felipe</td>
                    <td>felipe@toctoc.com.br</td>
                    <td>
                        <div class="botoes">
                            <img src="../../../../public/assets/visualizar.png" class="icon" alt="VisualizarIcon"> 
                            <button type="button" class="button yellow" id="visualizar" >Visualizar</button>
                            <img src="../../../../public/assets/editar.png" class="icon" alt="EditIcon"> 
                            <button type="button" class="button green" id="edit">Editar</button>
                            <img src="../../../../public/assets/excluir.png" class="icon" alt="DeleteIcon"> 
                            <button type="button" class="button red" id="delete" >Excluir</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Felipe</td>
                    <td>felipe@toctoc.com.br</td>
                    <td>
                        <div class="botoes">
                            <img src="../../../../public/assets/visualizar.png" class="icon" alt="VisualizarIcon"> 
                            <button type="button" class="button yellow" id="visualizar" >Visualizar</button>
                            <img src="../../../../public/assets/editar.png" class="icon" alt="EditIcon"> 
                            <button type="button" class="button green" id="edit">Editar</button>
                            <img src="../../../../public/assets/excluir.png" class="icon" alt="DeleteIcon"> 
                            <button type="button" class="button red" id="delete" >Excluir</button>
                        </div>
                    </td>
                </tr>
            </tbody>

        </table>

        </div>


        
        <div class="modal" id="modal">  
            <div class="modal-content" id="modal-delete-user">
                <header class="modal-header deleteuser">
                    <h2>Tem certeza que deseja excluir este usuário?</h2>
                    <span class="modal-close" id="modalClose">&#10006;</span>
                </header>
                <footer class="modal-footer del">
                    <button id="salvar" class="button yellow">Confirmar</button>
                    <button id="cancelar" class="button cancel">Cancelar</button>
                </footer>
            </div>

            <div class="modal-content" id="modal-new-user">
                <header class="modal-header new-user">
                    <h2>Novo Usuário</h2>
                    <span class="modal-close" id="modalClose">&#10006;</span>
                </header>
                <form id="form" class="modal-form">
                    <input type="text" id="nome" data-index="new" class="modal-field" placeholder="nome" required>
                    <input type="email" id="email" class="modal-field" placeholder="e-mail" required>
                </form>
                <footer class="modal-footer">
                    <button id="salvar" class="button yellow">Salvar</button>
                    <button id="cancelar" class="button cancel">Cancelar</button>
                </footer>
            </div>

            <div class="modal-content" id="modal-manage-user">
                <header class="modal-header">
                    <h2>Editar/Visualizar Usuário</h2>
                    <span class="modal-close" id="modalClose">&#10006;</span>
                </header>
                <form id="form" class="modal-form">
                    <input type="text" id="nome" data-index="new" class="modal-field" placeholder="nome" required>
                    <input type="email" id="email" class="modal-field" placeholder="e-mail" required>

                    
                    <input type="password" id="password" class="modal-field" placeholder="password" required>
                </form>
                <footer class="modal-footer">
                    <button id="salvar" class="button yellow">Salvar</button>
                    <button id="cancelar" class="button cancel">Cancelar</button>
                </footer>
            </div>
        </div>
    </main>
   
    <div class="baixo">
        <footer>
            Think Outside The Cube
        </footer>
    </div>

</body>

</html>