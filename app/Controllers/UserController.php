<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{

    public function index()
    {
        session_start();
        if($_SESSION['logado']){
            $usuarios = App::get('database')->selectAll('users');
            $error = null;
            if (isset($_SESSION['error_message'])) {
                $error = $_SESSION['error_message'];
                // Limpe a mensagem de erro da sessão para que ela não persista após o recarregamento da página
                unset($_SESSION['error_message']);
            }
    

            $tables =[
                'usuarios' => $usuarios,
                'error' => $error,
            ];
            return view('admin/listausuarios', $tables);
        }else{
            header('Location: /');           
        }
    }

    public function create()
    {
        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];

        app::get('database')->insert('users', $parameters);

        header('Location: /admin/users');
    }

    public function delete()
    {
        $id = $_POST['id'];
        $database = App::get('database');
    
        $error = $database->delete('users', $id);
    
        if ($error) {
            // Armazene a mensagem de erro na sessão
            session_start();
            $_SESSION['error_message'] = 'Não é possível deletar este usuário, verifique se há algum post atrelado a ele';
    
            // Redirecione para evitar reenvio do formulário e exibir a mensagem de erro
            header('Location: /admin/users');
            exit();
        }
    
        // Se não houver erro, redirecione normalmente
        header('Location: /admin/users');
        exit();
    }

    public function edit()
    {
        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];

        $id = $_POST['id'];

        App::get('database')->edit('users', $id, $parameters);

        header('Location: /admin/users');
    }
}

?>