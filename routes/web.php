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

$router->group(['prefix' => 'api'], function () use ($router) {
  
    $router->post('createProfile', ['uses' => 'ApplicationController@createProfile']);
    
    $router->get('profile/{id}', ['uses' => 'ApplicationController@showOneProfile']);
    
    $router->get('getAllProfiles', ['uses' => 'ApplicationController@showallProfiles']);
    
    $router->get('getAllProfiles/{gender}', ['uses' => 'ApplicationController@showOppositeGenderProfiles']);
    
    $router->post('updateProfile/{id}', ['uses' => 'ApplicationController@updateProfile']);

    $router->post('search', ['uses' => 'ApplicationController@search']);
  
    // $router->delete('create_account/{id}', ['uses' => 'ApplicationController@delete']);
  
    // $router->post('update_Application/{id}', ['uses' => 'ApplicationController@update']);
  });