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

/** @var object $router */
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['namespace' => 'V1'], function () use ($router) {
    $router->group(['namespace' => 'News'], function () use ($router) {
        $router->group(['prefix' => 'api'], function () use ($router) {
            $router->get('news', ['as' => 'news', 'uses' => 'NewsController@index']);
            $router->post('news', ['as' => 'news', 'uses' => 'NewsController@create']);
        });
    });
});