<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LandingPageController
{

    public function index()
    {
        $posts = App::get('database')->selectMany('posts', 5);
        return view('site/landing_page2', compact('posts'));
    }
}

?>