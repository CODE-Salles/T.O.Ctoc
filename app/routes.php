<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\UserController;
use App\Core\Router;

    $router->get('', 'ExampleController@index');
    $router->get('admin/usuarios', 'UserController@index');
    $router->post('admin/create', 'UserController@create' );
    $router->post('admin/delete', 'UserController@delete' );
    $router->post('admin/edit', 'UserController@edit' );
?>