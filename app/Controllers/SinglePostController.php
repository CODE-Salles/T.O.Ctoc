<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class SinglePostController
{

    public function index()
    {
        // if($_POST['id'] != NULL){
        $id = $_GET['id'];
        $posts = App::get('database')->selectById($id, 'posts');
        $users = App::get('database')->selectAll('users');
        $tables = [
            'posts' => $posts,
            'users' => $users,
        ];
        return view('site/post_individual', compact('posts' , 'users'));
        // }else{
        // header('Location: /');
        // }
    }
}

?>