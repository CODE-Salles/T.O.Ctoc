<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

    $router->get('', 'ExampleController@index');
    $router->get('users', 'UserController@index');
    $router->post('users/edit', 'UserController@edit');
    $router->post('users/delete', 'UserController@delete');

?>