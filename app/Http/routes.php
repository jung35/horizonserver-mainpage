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

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

Route::get('/', array('as' => 'home', function()
{
    return view('hihihihihihihihi/pages/home');
}));


Route::get('/servers', array('as' => 'servers', function()
{
    return view('hihihihihihihihi/pages/servers');
}));


Route::get('/stats', array('as' => 'stats', function()
{
    return view('hihihihihihihihi/pages/home');
}));


Route::get('/giveaway', array('as' => 'giveaway', function()
{
    return view('hihihihihihihihi/pages/home');
}));
