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

//$router->get('/', function () use ($router) {
//    return $router->app->version();
//});

$router->get('/', [
    'as' => 'profile','middleware' => 'home', 'uses' => 'HomeController@showHomePage'
]);


$router->get('/clientip', [
    'as' => 'clientip', 'uses' => 'HomeController@clientIp'
]);


$router->group(['prefix' => 'account'], function () use ($router) {
    $router->get('ldap', 'AccountController@getAll');
    $router->get('register', 'AccountController@register');
    $router->post('register', 'AccountController@register');
    $router->get('login', 'AccountController@login');
    $router->post('login', 'AccountController@login');
    $router->get('/', 'AccountController@login');
    $router->get('/changepassword', 'AccountController@changePassword');
    $router->post('/changepassword', 'AccountController@changePassword');
});