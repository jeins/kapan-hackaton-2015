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

$app->get('/', 'HomeController@index');


########### Auth
$app->group(['prefix' => 'auth', 'namespace' => 'App\Http\Controllers'], function($app){
    $app->post('rakyat/signup', 'AuthController@signupRakyat');

    $app->post('rakyat/login', 'AuthController@loginRakyat');

    $app->post('rakyat/google', 'AuthController@googleOAuth');
});

$app->group(['prefix' => 'api', 'namespace' => 'App\Http\Controllers', 'middleware' => 'auth'], function($app){
    $app->get('profile/{id}', 'ProfilePemerintahController@getProfile');

    $app->get('projects', 'ProjectInfoController@getAllProject');

    $app->get('project/{id}', 'ProjectInfoController@getProjectById');

    $app->get('project/pemerintah/{id}', 'ProjectInfoController@getProjectByPemerintah');
});

$app->group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers', 'middleware' => 'auth'], function($app){
    ############ Profile
    $app->post('profile', 'ProfilePemerintahController@addNewProfiles');

    $app->put('profile/{id}', 'ProfilePemerintahController@updateProfile');

    ############ Project
    $app->post('project', 'ProjectInfoController@addNewProject');

    $app->put('project/{id}', 'ProjectInfoController@updateProject');
});
