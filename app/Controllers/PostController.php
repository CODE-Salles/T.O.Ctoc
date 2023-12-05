<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostController
{

    public function index()
    {
        $posts = App::get('database')->selectAll('posts');
        $users = App::get('database')->selectAll('users');
        return view('admin/listaposts', compact('posts','users'));
    }

    public function create()
    {
        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'created_at' => $_POST['date'],
            'author' => $_POST['author'],
        ];
        if($_FILES['image']['name'] !== ''){
            $arquivo = $_FILES['image']['name'];
            $novoNome = uniqid();
            $pasta = 'public/imgs/';
            $extencao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
            move_uploaded_file($_FILES['image']['tmp_name'], $pasta . $novoNome . "." . $extencao);
            $parameters += ['image' =>  $pasta . $novoNome . "." . $extencao,];
        }

        App::get('database')->insert('posts', $parameters);

        header('Location: /admin/posts');

    }

    public function edit()
    {
        $id = $_POST['id'];
        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'created_at' => $_POST['date'],
            'author' => $_POST['author'],
        ];

        // var_dump($_FILES);
        // if($_FILES['image']['name'] !== ''){
        //     echo 'true';
        // }
        if($_FILES['image']['name'] !== ''){
            $arquivo = $_FILES['image']['name'];
            $novoNome = uniqid();
            $pasta = 'public/imgs/';
            $extencao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
            move_uploaded_file($_FILES['image']['tmp_name'], $pasta . $novoNome . "." . $extencao);
            $parameters += ['image' =>  $pasta . $novoNome . "." . $extencao,];
        }
        App::get('database')->edit('posts', $id, $parameters);
        
        header('Location: /admin/posts');
    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('posts', $id);

        header('Location: /admin/posts');
        
    }
}