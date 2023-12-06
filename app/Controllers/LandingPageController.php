<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LandingPageController
{

    public function index()
    {
        $highlights = App::get('database')->selectAll('highlights');
        $fixed = [
            'first' => App::get('database')->selectById($highlights[0]->special_up1, 'posts'),
            'second' => App::get('database')->selectById($highlights[0]->special_up2, 'posts'),
            'third' => App::get('database')->selectById($highlights[0]->special_down1, 'posts'),
            'fourth' => App::get('database')->selectById($highlights[0]->special_down2, 'posts')
        ];

        $posts = App::get('database')->selectMany('posts', 5);
        return view('site/landing_page', compact('posts','fixed'));
    }
}

?>