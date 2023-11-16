<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{

    public function index()
    {
        $usuarios = App::get('database')->selectAll('users');
        $tables =[
            'usuarios' => $usuarios,
        ];
        return view('admin/listausuarios', $tables);
    }

    public function create()
    {
        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];

        app::get('database')->insert('users', $parameters);

        header('Location: /admin/usuarios');
    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('users', $id);

        header('Location: /admin/usuarios');
    }

    public function edit()
    {
        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];

        App::get('database')->edit('users', $_POST['id'], $parameters);

        header['Location: /admin/usuarios'];
    }
}

?>