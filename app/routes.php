<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', array( 'as' => 'home', 'uses' => 'HomeController@index' ) );

Route::get('game/{name?}', 'GameController@index');

Route::get('collection/{collectionName?}', 'CollectionController@index');

Route::get('collection/{collectionName?}/{subcollectionName?}', 'CollectionController@subcollection');

Route::get('video/create', array( 'as' => 'video.create', 'uses' => 'VideoController@create' ) );

Route::post('video/insert', array( 'as' => 'video.insert', 'uses' => 'VideoController@insert' ) );

Route::get('video/show/{id}', array( 'as' => 'video.show', 'uses' => 'VideoController@show' ) );


Route::get('index', 'IndexController@index');

//Route::get('anna', 'AnnaController@index');
Route::get('anna', array( 'as' => 'anna', 'uses' => 'AnnaController@index' ) );
Route::post('anna/secondstep', array( 'as' => 'anna.second', 'uses' => 'AnnaController@secondstep' ) );


/*
Route::group(array('prefix' => 'video'), function()
{

    Route::get( 'update/{id?}', array( 'as' => 'video.update', 'uses' => 'VideoController@update' ) );

    Route::get( 'insert/', array( 'as' => 'videoinsert', 'uses' => 'VideoController@insert' ) );

});*/
