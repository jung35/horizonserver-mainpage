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
    $user = array(
        'avatar'    => 'http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/60/60f1f401b4a9b2870486c1750d430d9d0f1d7369_full.jpg',
        'name'      => 'Jung - VacStat.us',
        'rank'      => 27,
        'percent'   => 0.28,
        'tag'       => '✪ God-Like ✪',
        'tag_color' => '#1E90FF',
        'playtime'  => '13d 15h 42m 30s',
        'lastseen'  => 'February 4, 2015, 7:12 am',
        'mapstats'  => array(
            'highest_tier'       => 4,
            'num_beaten'         => 77,
            'percent_completion' => 47.0,
            'maps'               => array(
                array('name' => 'overgrowth', 'time' => '06:48.39', 'rank' => '58/97', 'tier' => '4', 'num_completed' => 4),
                array('name' => 'acp', 'time' => '16:46.64', 'rank' => '136/149', 'tier' => '3', 'num_completed' => 1),
                array('name' => 'amplitude_apex_njv', 'time' => '02:05.27', 'rank' => '38/68', 'tier' => '3', 'num_completed' => 3),
                array('name' => 'animals', 'time' => '14:55.54', 'rank' => '34/45', 'tier' => '3', 'num_completed' => 1),
                array('name' => 'deceptive_final', 'time' => '16:45.82', 'rank' => '33/38', 'tier' => '3', 'num_completed' => 1),
                array('name' => 'dusk', 'time' => '08:32.85', 'rank' => '49/74', 'tier' => '3', 'num_completed' => 2),
                array('name' => 'dynasty', 'time' => '01:09.22', 'rank' => '38/40', 'tier' => '3', 'num_completed' => 1),
                array('name' => 'ember_sns', 'time' => '02:59.12', 'rank' => '39/99', 'tier' => '3', 'num_completed' => 3),
                array('name' => 'epic', 'time' => '06:08.61', 'rank' => '31/64', 'tier' => '3', 'num_completed' => 4),
                array('name' => 'extremex', 'time' => '05:48.30', 'rank' => '34/62', 'tier' => '3', 'num_completed' => 4),
                array('name' => 'forbidden_swag', 'time' => '16:09.79', 'rank' => '42/55', 'tier' => '3', 'num_completed' => 1),
                array('name' => 'fruits', 'time' => '00:15.50', 'rank' => '11/19', 'tier' => 'Bonus', 'num_completed' => 4),
                array('name' => 'fruits', 'time' => '02:10.88', 'rank' => '45/254', 'tier' => '3', 'num_completed' => 5),
                array('name' => 'globalchaos', 'time' => '00:22.82', 'rank' => '31/153', 'tier' => '3', 'num_completed' => 1),
                array('name' => 'healthy_e', 'time' => '04:38.55', 'rank' => '50/95', 'tier' => '3', 'num_completed' => 2),
                array('name' => 'heaven', 'time' => '01:33.71', 'rank' => '60/160', 'tier' => '3', 'num_completed' => 2),
                array('name' => 'imagine_fix', 'time' => '02:54.30', 'rank' => '8/32', 'tier' => '3', 'num_completed' => 4),
                array('name' => 'jenocide', 'time' => '02:39.68', 'rank' => '40/78', 'tier' => '3', 'num_completed' => 1),
                array('name' => 'krow10', 'time' => '00:34.76', 'rank' => '40/50', 'tier' => '3', 'num_completed' => 1),
                array('name' => 'liberation2', 'time' => '03:21.92', 'rank' => '38/81', 'tier' => '3', 'num_completed' => 2),
                array('name' => 'lighthouse', 'time' => '09:04.06', 'rank' => '43/53', 'tier' => '3', 'num_completed' => 2),
                array('name' => 'ny_advance_nsf_v2', 'time' => '33:47.32', 'rank' => '18/18', 'tier' => '3', 'num_completed' => 1),
                array('name' => 'olympics_sns', 'time' => '01:44.35', 'rank' => '33/217', 'tier' => '3', 'num_completed' => 3),
                array('name' => 'rapid_njv', 'time' => '01:27.10', 'rank' => '56/105', 'tier' => '3', 'num_completed' => 2),
                array('name' => 'smile', 'time' => '04:02.82', 'rank' => '29/52', 'tier' => '3', 'num_completed' => 2),
                array('name' => 'voteforthisone', 'time' => '13:26.30', 'rank' => '61/77', 'tier' => '3', 'num_completed' => 1),
                array('name' => 'aether', 'time' => '00:51.05', 'rank' => '43/391', 'tier' => '2', 'num_completed' => 7),
                array('name' => 'annoyance_njv', 'time' => '10:14.09', 'rank' => '48/86', 'tier' => '2', 'num_completed' => 1),
                array('name' => 'atlas_1', 'time' => '00:40.05', 'rank' => '15/67', 'tier' => '2', 'num_completed' => 5),
                array('name' => 'boring', 'time' => '02:01.23', 'rank' => '20/259', 'tier' => '2', 'num_completed' => 3),
                array('name' => 'classics', 'time' => '11:32.05', 'rank' => '26/226', 'tier' => '2', 'num_completed' => 2),
                array('name' => 'colors_beta1', 'time' => '01:37.28', 'rank' => '37/481', 'tier' => '2', 'num_completed' => 2),
                array('name' => 'colours', 'time' => '01:31.31', 'rank' => '20/998', 'tier' => '2', 'num_completed' => 3),
                array('name' => 'eclipse', 'time' => '00:46.17', 'rank' => '8/203', 'tier' => '2', 'num_completed' => 3),
                array('name' => 'exocube', 'time' => '01:36.93', 'rank' => '44/136', 'tier' => '2', 'num_completed' => 4),
                array('name' => 'flyin_fortress', 'time' => '00:44.17', 'rank' => '44/82', 'tier' => '2', 'num_completed' => 1),
                array('name' => 'furios-', 'time' => '12:26.29', 'rank' => '65/83', 'tier' => '2', 'num_completed' => 1),
                array('name' => 'graphia', 'time' => '00:58.48', 'rank' => '15/38', 'tier' => '2', 'num_completed' => 1),
                array('name' => 'grassland', 'time' => '00:46.10', 'rank' => '16/166', 'tier' => '2', 'num_completed' => 3),
                array('name' => 'happyhands_test', 'time' => '01:04.53', 'rank' => '67/139', 'tier' => '2', 'num_completed' => 2),
                array('name' => 'ing_njv', 'time' => '01:24.73', 'rank' => '20/91', 'tier' => '2', 'num_completed' => 4),
                array('name' => 'island', 'time' => '01:02.63', 'rank' => '32/103', 'tier' => '2', 'num_completed' => 6),
                array('name' => 'kz_protraining', 'time' => '02:55.79', 'rank' => '18/265', 'tier' => '2', 'num_completed' => 2),
                array('name' => 'lore_e', 'time' => '02:12.87', 'rank' => '32/111', 'tier' => '2', 'num_completed' => 2),
                array('name' => 'lullaby_ksf', 'time' => '01:06.35', 'rank' => '52/138', 'tier' => '2', 'num_completed' => 1),
                array('name' => 'newb_hazard_r1', 'time' => '00:22.39', 'rank' => '9/235', 'tier' => '2', 'num_completed' => 2),
                array('name' => 'not_so_sinister', 'time' => '01:37.78', 'rank' => '50/155', 'tier' => '2', 'num_completed' => 2),
                array('name' => 'ny_platinum', 'time' => '06:45.39', 'rank' => '90/134', 'tier' => '2', 'num_completed' => 1),
                array('name' => 'sundown_njv', 'time' => '01:13.86', 'rank' => '57/189', 'tier' => '2', 'num_completed' => 3),
                array('name' => 'sup_', 'time' => '01:36.85', 'rank' => '41/161', 'tier' => '2', 'num_completed' => 2),
                array('name' => 'tensile_njv', 'time' => '00:55.21', 'rank' => '14/41', 'tier' => '2', 'num_completed' => 1),
                array('name' => 'waterworks', 'time' => '01:25.48', 'rank' => '47/157', 'tier' => '2', 'num_completed' => 6),
                array('name' => 'aircontrol_ksf', 'time' => '00:42.57', 'rank' => '16/3385', 'tier' => '1', 'num_completed' => 4),
                array('name' => 'beginner', 'time' => '00:48.26', 'rank' => '7/2317', 'tier' => '1', 'num_completed' => 2),
                array('name' => 'derpis_ksf', 'time' => '01:19.71', 'rank' => '29/2660', 'tier' => '1', 'num_completed' => 7),
                array('name' => 'forbidden_ways_ksf', 'time' => '00:59.77', 'rank' => '9/500', 'tier' => '1', 'num_completed' => 6),
                array('name' => 'funhouse_njv', 'time' => '01:06.02', 'rank' => '7/158', 'tier' => '1', 'num_completed' => 4),
                array('name' => 'kitsune', 'time' => '01:09.29', 'rank' => '18/2121', 'tier' => '1', 'num_completed' => 5),
                array('name' => 'lament_n2p', 'time' => '01:18.42', 'rank' => '121/139', 'tier' => '1', 'num_completed' => 1),
                array('name' => 'leet_xl_beta7z_swg', 'time' => '00:16.34', 'rank' => '10/335', 'tier' => '1', 'num_completed' => 6),
                array('name' => 'legends_lite', 'time' => '00:38.71', 'rank' => '22/57', 'tier' => '1', 'num_completed' => 1),
                array('name' => 'lessons', 'time' => '00:43.47', 'rank' => '5/891', 'tier' => '1', 'num_completed' => 1),
                array('name' => 'lux', 'time' => '00:36.62', 'rank' => '63/1108', 'tier' => '1', 'num_completed' => 1),
                array('name' => 'mesa', 'time' => '00:48.85', 'rank' => '41/3259', 'tier' => '1', 'num_completed' => 1),
                array('name' => 'ninja_go_b5', 'time' => '01:11.32', 'rank' => '40/219', 'tier' => '1', 'num_completed' => 2),
                array('name' => 'pox', 'time' => '00:28.85', 'rank' => '16/597', 'tier' => '1', 'num_completed' => 1),
                array('name' => 'prelude_ksf', 'time' => '00:46.45', 'rank' => '18/234', 'tier' => '1', 'num_completed' => 7),
                array('name' => 'prime_time_r3vamp', 'time' => '00:13.64', 'rank' => '17/411', 'tier' => '1', 'num_completed' => 4),
                array('name' => 'rebel_resistance_njv', 'time' => '00:29.68', 'rank' => '15/1007', 'tier' => '1', 'num_completed' => 1),
                array('name' => 'rebel_scaz_njv', 'time' => '00:21.72', 'rank' => '19/776', 'tier' => '1', 'num_completed' => 6),
                array('name' => 'reprise', 'time' => '01:07.28', 'rank' => '35/631', 'tier' => '1', 'num_completed' => 5),
                array('name' => 'rookie', 'time' => '02:46.43', 'rank' => '11/1088', 'tier' => '1', 'num_completed' => 7),
                array('name' => 'simpsons_go_rc2', 'time' => '01:20.12', 'rank' => '11/1701', 'tier' => '1', 'num_completed' => 4),
                array('name' => 'utopia_njv', 'time' => '00:49.23', 'rank' => '14/1174', 'tier' => '1', 'num_completed' => 2),
                array('name' => 'utopia_v3', 'time' => '00:50.20', 'rank' => '17/960', 'tier' => '1', 'num_completed' => 7),
                array('name' => 'water-run_banjo_skill', 'time' => '00:39.04', 'rank' => '14/2369', 'tier' => '1', 'num_completed' => 1),
                array('name' => 'year3000', 'time' => '00:19.45', 'rank' => '18/121', 'tier' => '1', 'num_completed' => 1),
            )
        )
    );
    return View::make('hihihihihihihihi/pages/stats', array('user' => $user));
}));


Route::get('/giveaway', array('as' => 'giveaway', function()
{
    return view('hihihihihihihihi/pages/giveaway');
}));
