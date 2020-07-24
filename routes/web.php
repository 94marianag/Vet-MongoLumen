<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

/* $router->get('perritos', function(){
    return $peroos = Perro::all();
}); */

$router->get('/perritos', ['uses' => 'PerroController@index']);
$router->post('/perritos', ['uses' => 'PerroController@store']);
