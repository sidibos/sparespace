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

$app->get('/', function () use ($app) {
    return $app->version();
});

##################################
#User
$app->get('/user/{id}', 'Users\UserController@show');
$app->get('/user/', 'Users\UserController@getAllUsers');
$app->put('/user/{id}', 'Users\UserController@update');
$app->post('/user/', 'Users\UserController@store');
//$app->get('/user/all', 'Users\UserController@getAllUsers');

#############
#workspace
$app->get('/workspace/all', 'Spaces\WorkspaceController@getList');
$app->get('workspace/{id}', 'Spaces\WorkspaceController@show');
$app->put('workspace/{id}', 'Spaces\WorkspaceController@update');
$app->post('workspace/', 'Spaces\WorkspaceController@store');


###########################
#adress
$app->get('/address/{id}', 'Spaces\AddressController@show');

$app->get('profile', [
    'middleware' => 'auth',
    'uses' => 'Users\UserController@showProfile'
]);

/*$app->get('/users', function() {
    return \App\User::all();
});
*/

$app->get('test', function () {
    return 'This is it!';
});
