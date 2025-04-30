<?php

use \Core\Classes\Router as Router;

$router = new Router;

// Routes

// Public routes
//
$router->get('', 'HomeController@index');
// Appartements
$router->get('/listing/{id}', 'ListingController@show');
$router->get('/user/listing/{id}', 'ListingController@userStore');
// Auth
$router->get('/reg', 'AuthController@registerForm');
$router->post('/reg', 'AuthController@register');
$router->get('/login', 'AuthController@loginForm');
$router->post('/login', 'AuthController@login');

// Routes for authenticated users
//
$router->group('/listing', function($router){
    // Create
    $router->get('/new', 'ListingController@createForm');
    $router->post('', 'ListingController@create');
    // update
    $router->get('/{id}/edit', 'ListingController@editForm');
    $router->post('/{id}/edit', 'ListingController@edit');
    // delete
    $router->post('/{id}/delete', 'ListingController@delete');
}, [new \App\Middlewares\AuthMiddleware()]);

// Ml service
//
$router->get('/predict', 'MlController@predict');

// Handling error 404
$router->_404('IndexController@_404');

// End
return $router;
