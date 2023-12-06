<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class HighLightsController
{

    public function index()
    {
        session_start();
        if($_SESSION['logado']){
            $fixeds = App::get('database')->selectAll('highlights');
            $posts = App::get('database')->selectAll('posts');
            return view('admin/HighLights', compact('fixeds','posts'));
        }else{
            header('Location: /');
        }
    }

    public function edit()
    {
        $parameters = [
            'special_up1' => $_POST['special_up1'],
            'special_up2' => $_POST['special_up2'],
            'special_down1' => $_POST['special_down1'],
            'special_down2' => $_POST['special_down2'],
            'mainpost' => $_POST['mainpost']
        ];

        App::get('database')->edit('highlights', 1, $parameters);

        header('Location: /admin/highlights');
    }
}

?>