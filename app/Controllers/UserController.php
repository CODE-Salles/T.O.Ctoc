<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{

    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('admin/users_list', compact('users'));
    }

    public function edit()
    {
        $id = $_POST['id'];
        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
        App::get('database')->edit('users', $id, $parameters);
        
        header('Location: /users');
    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('users', $id);

        header('Location: /users');
        
    }
}

?>