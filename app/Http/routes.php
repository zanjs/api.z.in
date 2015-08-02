<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* api */

$api = app('api.router');
$api->version('v1', function ($api) {
    $api->get('users/{id}', 'App\Http\Controllers\UserController@show');
    $api->post('users/register', 'Api\V1\UserController@register');
});