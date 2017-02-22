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

	$app->group(['prefix' => 'api/v1'], function($app)
{
	$app->post('artisan','ArtisanController@createArtisan');

	$app->put('artisan/{id}','ArtisanController@updateArtisan');

	$app->post('artisan/login','ArtisanController@doArtisanLogin');

	$app->get('artisan','ArtisanController@showAllArtisan');

	$app->get('artisan/{id}','ArtisanController@showArtisanById');

	$app->get('artisan/category/{id}','ArtisanController@getArtisanByCategoryId');

	$app->get('category','CategoryController@showAllCategory');


	
});
