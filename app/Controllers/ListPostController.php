<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ListPostController
{

    public function index()
    {
        $page = 1;

        if (isset($_GET['pagina']) && !empty($_GET['pagina'])) {
          $page = intval($_GET['pagina']);
    
          if ($page <= 0) {
            return redirect('postagens');
          }
        }
    
        $itens_per_page = 6;
        $start_limit = $itens_per_page * $page - $itens_per_page;
    
        if (isset($_GET['search'])) {
    
          $posts = App::get('database')->search($_GET['search'], $start_limit, $itens_per_page);
          $rows_count = count($posts);
        } else {
          $rows_count = App::get('database')->countCases('posts');
          $posts = App::get('database')->selectAll('posts', $start_limit, $itens_per_page);
        }
    
        if ($start_limit > $rows_count) {
          return redirect('postagens');
        }
    
        $total_pages = ceil($rows_count / $itens_per_page);
        $fixed = App::get('database')->selectAll('highlights');
        $fixed = $fixed[0]->mainpost;
        $mainpost = App::get('database')->selectById($fixed, 'posts');
        return view('site/listPost', compact('posts','page','total_pages','mainpost'));
    }

}

?>