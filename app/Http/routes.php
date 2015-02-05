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
    $servers = array();

    $servers[] = array(
        'title' => 'Beginner',
        'alt'   => 'beginner surf',
        'img'   => 'http://cache.www.gametracker.com/server_info/74.91.120.159:27015/b_350_20_DB0000_520004_FFFFFF_000000.png',
        'desc'  => 'This server is for players who are learning how to surf.',
        'conn'  => 'steam://connect/74.91.120.159:27015'
    );

    $servers[] = array(
        'title' => 'Easy',
        'alt'   => 'easy surf',
        'img'   => 'http://cache.www.gametracker.com/server_info/74.91.120.159:27017/b_350_20_DB0000_520004_FFFFFF_000000.png',
        'desc'  => 'This server is for players who are decent at surfing.',
        'conn'  => 'steam://connect/74.91.120.159:27017'
    );

    $servers[] = array(
        'title' => 'Medium',
        'alt'   => 'medium surf',
        'img'   => 'http://cache.www.gametracker.com/server_info/74.91.120.159:27018/b_350_20_DB0000_520004_FFFFFF_000000.png',
        'desc'  => 'This server is for players who are good at surfing.',
        'conn'  => 'steam://connect/74.91.120.159:27018'
    );

    $servers[] = array(
        'title' => 'Hard',
        'alt'   => 'hard surf',
        'img'   => 'http://cache.www.gametracker.com/server_info/74.91.120.159:27016/b_350_20_DB0000_520004_FFFFFF_000000.png',
        'desc'  => 'This server is for skilled surfers. This is our most difficult server.',
        'conn'  => 'steam://connect/74.91.120.159:27016'
    );

    $servers[] = array(
        'title' => 'Donator',
        'alt'   => 'donator surf',
        'img'   => 'http://cache.www.gametracker.com/server_info/74.91.120.159:27019/b_350_20_DB0000_520004_FFFFFF_000000.png',
        'desc'  => 'This server is for players who are decent at surfing.',
        'conn'  => 'steam://connect/74.91.120.159:27019'
    );

    $servers[] = array(
        'title' => 'Teamspeak 3',
        'alt'   => 'teamspeak server',
        'img'   => 'http://cache.www.gametracker.com/server_info/198.206.15.182:1854/b_350_20_DB0000_520004_FFFFFF_000000.png',
        'desc'  => 'This is our Teamspeak Server. We use TS to communicate with players.',
        'conn'  => 'ts3server://ts3.horizonservers.net:1854'
    );

    $ranks = array();

    $ranks[] = array('rank' => 'Unranked | 0%','color' => 'grey');
    $ranks[] = array('rank' => 'Newbie | 100%','color' => 'lightblue');
    $ranks[] = array('rank' => 'Newbie ✪ | 75%','color' => 'lightblue');
    $ranks[] = array('rank' => 'Learning | 50%','color' => 'default');
    $ranks[] = array('rank' => 'Learning ✪ | 45%','color' => 'default');
    $ranks[] = array('rank' => 'Novice | 40%','color' => 'yellow');
    $ranks[] = array('rank' => 'Novice ✪ | 35%','color' => 'yellow');
    $ranks[] = array('rank' => 'Average | 30%','color' => 'orange');
    $ranks[] = array('rank' => 'Average ✪ | 25%','color' => 'orange');
    $ranks[] = array('rank' => 'Advanced | 20%','color' => 'olive');
    $ranks[] = array('rank' => 'Advanced ✪ | 10%','color' => 'olive');
    $ranks[] = array('rank' => 'Skilled | 5%','color' => 'lime');
    $ranks[] = array('rank' => 'Skilled ✪ | 2.5%','color' => 'lime');
    $ranks[] = array('rank' => 'Expert | 1%','color' => 'purple');
    $ranks[] = array('rank' => 'Expert ✪ | 0.87%','color' => 'purple');
    $ranks[] = array('rank' => 'Master | 0.75%','color' => '#1E90FF');
    $ranks[] = array('rank' => 'Master ✪ | 0.5%','color' => '#1E90FF');
    $ranks[] = array('rank' => 'Legendary | 0.25%','color' => 'darkblue');
    $ranks[] = array('rank' => 'Legendary ✪ | 0.15%','color' => 'darkblue');
    $ranks[] = array('rank' => 'God-Like | 0.1%','color' => 'red');
    $ranks[] = array('rank' => '✪ God-Like ✪ | 0.001%','color' => 'red');


    return View::make('hihihihihihihihi/pages/servers', array('servers' => $servers, 'ranks' => $ranks));
}));


Route::get('/stats', array('as' => 'stats', function()
{
    return view('hihihihihihihihi/pages/home');
}));


Route::get('/giveaway', array('as' => 'giveaway', function()
{
    return view('hihihihihihihihi/pages/home');
}));
