<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['middleware' => ['request','response']], function () use ($router) {
    $router->group(['prefix' => 'api'], function () use($router) {
        $router->group(['prefix' => 'v1'], function () use ($router) {
            $router->get('/', function () use ($router) {
                return response(['content' => ['header' => ["status_code" => 200], 'data' => $router->app->version()]], 200);
            });
        });
    });
});
