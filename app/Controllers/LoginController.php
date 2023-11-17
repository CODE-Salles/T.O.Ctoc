<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{

    public function index()
    {

        return view('site/login');
    }


    public function create()
    {
        
        $email = $_POST["email"];
        $password = $_POST["password"];

        $logged = App::get('database')->login('users', $email, $password);

        if($logged){
            session_start();
            $_SESSION['logado'] = true;
            header('Location: /');
        } else { 
            $error = [
                'error' => "Usuário ou senha inválidos",
            ] ;
            return view('site/login', $error);
        }
    }

    public function delete(){
        session_start();
        session_destroy();
        header('Location: /');
    }

}