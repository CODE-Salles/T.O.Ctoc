<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class DashboardController
{

    public function index()
    {
        session_start();
        if($_SESSION['logado']){
            $posts = App::get('database')->selectAll('highlights');
            return view('admin/dashboard', compact('posts'));
        }else{
            header('Location: /');
        }
    }
}

?>