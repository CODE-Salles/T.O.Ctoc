<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{

    public function index()
    {
        $usuarios = App::get('database')->selectAll('users');
        return view('admin/listausuarios', compact('usuarios'));
    }
}

?>