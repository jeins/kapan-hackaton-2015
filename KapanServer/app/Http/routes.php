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
    return $app->welcome();
});

$app->group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'mediatype'], function($app){
    ############ Profile
    $app->get('profile/{id}', 'ProfileController@getProfile');

    $app->post('profile', 'ProfileController@addNewProfiles');

    $app->put('profile/{id}', 'ProfileController@updateProfile');

    ############ Project
    $app->get('projects', 'InfoProjectController@getAllProject');

    $app->get('project/{id}', 'InfoProjectController@getProjectById');

    $app->get('project/pemerintah/{id}', 'InfoProjectController@getProjectByPemerintah');

    $app->post('project', 'InfoProjectController@addNewProject');

    $app->put('project/{id}', 'InfoProjectController@updateProject');

});
