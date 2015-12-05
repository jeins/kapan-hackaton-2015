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

// ===============================================
// AUTH (Login/Signup) SECTION ===================
// ===============================================
$app->group(['prefix' => 'auth', 'namespace' => 'App\Http\Controllers'], function($app){
    $app->post('admin/login', 'AuthController@loginAdmin');

    $app->post('admin/register', 'AuthController@registerNewAdmin');

    $app->post('rakyat/signup', 'AuthController@signupRakyat');

    $app->post('rakyat/login', 'AuthController@loginRakyat');

    $app->post('rakyat/google', 'AuthController@googleOAuth');
});

// ===============================================
// ADMIN SECTION =================================
// ===============================================
$app->group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers', 'middleware' => 'auth'], function($app){
    $app->put('profile/{id}', 'ProfilePemerintahController@updateProfile');

    $app->post('project', 'ProjectInfoController@addNewProject');

    $app->put('project/{id}', 'ProjectInfoController@updateProject');

    $app->put('progress/{id}', 'ProjectProgressController@updateProjectProgress');
});

// ===============================================
// Rakyat SECTION ================================
// ===============================================
$app->group(['prefix' => 'rakyat', 'namespace' => 'App\Http\Controllers', 'middleware' => 'auth'], function($app){
    $app->get('profile', 'ProfileRakyatController@getRakyat');

    $app->post('post/project/{id}', 'ProjectPostController@addPostInProjectInfoOrProgress');

    $app->post('post/progress/{id}', 'ProjectPostController@addPostInProjectInfoOrProgress');

    $app->put('post/{id}', 'ProjectPostController@editPost');

    $app->post('post/like', 'ProjectPostController@likePost');

    $app->delete('post/unlike', 'ProjectPostController@unlikePost');

    $app->post('comment/post/{id}', 'PostCommentsController@addCommentToPost');
});

// ===============================================
// API SECTION ===================================
// ===============================================
$app->group(['prefix' => 'api', 'namespace' => 'App\Http\Controllers'], function($app){
    $app->get('profiles', 'ProfilePemerintahController@getProfiles');

    $app->get('profile/{id}', 'ProfilePemerintahController@getProfile');

    $app->get('projects', 'ProjectInfoController@getAllProject');

    $app->get('project/{id}', 'ProjectInfoController@getProjectById');

    $app->get('project/pemerintah/{id}', 'ProjectInfoController@getProjectByPemerintah');

    $app->get('project/{id}/post', 'ProjectInfoController@getProjectInfoComments');

    $app->get('progress/{id}', 'ProjectProgressController@getProjectProgressByProjectId');
});
