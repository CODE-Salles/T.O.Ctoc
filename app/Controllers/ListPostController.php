<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ListPostController
{

    public function index()     //função para controlar a paginação
    {
        $page = 1;      //inicia a variável page=1

        if (isset($_GET['pagina']) && !empty($_GET['pagina'])) {        //verifica se 'pagina' esta na url
          $page = intval($_GET['pagina']);      //conversão de 'pagina' para int
    
          if ($page <= 0) {         //se 'pagina' <= redireciona p/ postagens
            return redirect('postagens');
          }
        }
    
        $itens_per_page = 6;        //maximo de posts por pagina
        $start_limit = $itens_per_page * $page - $itens_per_page;
    
        if (isset($_GET['search'])) { //busca na barra de pesquisa e no banco de dados
    
          $posts = App::get('database')->search($_GET['search'], $start_limit, $itens_per_page);
          $rows_count = count($posts);
        } else {
          $rows_count = App::get('database')->countCases('posts');
          $posts = App::get('database')->selectAll('posts', $start_limit, $itens_per_page);
        }
    
        if ($start_limit > $rows_count) {           //redireciona se fora dos limites
          return redirect('postagens');
        }
    
        $total_pages = ceil($rows_count / $itens_per_page);         //calculo do num total de pags e retorna view
        return view('site/listPost', compact('posts','page','total_pages'));
    }

}

?>