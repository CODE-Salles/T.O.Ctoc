<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\UserController;
use App\Controllers\DashboardController;
use App\Controllers\LoginController;
use App\Controllers\LandingPageController;
use App\Controllers\ListPostController;
use App\Controllers\SinglePostController;
use App\Core\Router;

    // Crud Users
    $router->get('admin/users', 'UserController@index');
    $router->post('admin/users/edit', 'UserController@edit');
    $router->post('admin/users/delete', 'UserController@delete');
    $router->post('admin/users/create', 'UserController@create');

    // Crud Posts
    $router->get('admin/posts', 'PostController@index');
    $router->post('admin/posts/edit', 'PostController@edit');
    $router->post('admin/posts/delete', 'PostController@delete');
    $router->post('admin/posts/create', 'PostController@create');

    //Dashboard Page
    $router->get('admin', 'DashboardController@index');

    // Lading Page
    $router->get('', 'LandingPageController@index');

    // List Posts
    $router->get('postagens', 'ListPostController@index');

    //Sinlge Post
    $router->get('postagens/post', 'SinglePostController@index');

    // Login Page
    $router->get('login', 'LoginController@index');
    $router->post('login', 'LoginController@create');
    $router->get('logout', 'LoginController@delete');



?>