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

Route::get('gallery/{name?}', 'GalleryController@index');

Route::get('collection/{collectionName?}', 'CollectionController@index');

Route::get('collection/{collectionName?}/{subcollectionName?}', 'CollectionController@subcollection');

Route::get('video/{id}', 'VideoController@index');

Route::get('list/{name?}', 'ListController@index');

Route::get('video/insert/', 'VideoController@insert');


Route::group(array('prefix' => 'video'), function()
{

    Route::get( 'update/{id?}', array( 'as' => 'video.update', 'uses' => 'VideoController@update' ) );

    Route::get( 'insert/', array( 'as' => 'videoinsert', 'uses' => 'VideoController@insert' ) );

});


// Test.

Route::get('users', function()
{

    $users = User::all();

    $users = User::where('name','victor')->take(10)->get();

    return View::make('users')->with('users', $users);

});