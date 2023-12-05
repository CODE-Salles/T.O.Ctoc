<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class SinglePostController
{

    public function index()
    {
        return view('site/listPost');
    }
}

?>