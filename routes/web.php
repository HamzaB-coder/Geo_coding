<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $config['center'] = 'Air Canada Center, toronto';
    $config['zoom'] = '14';
    $config['map_height'] = '500px';
    
    $config['scrollwheel'] = true;

    GMaps::initialize($config);
   

    $marker['position'] = 'Air Canada Center, toronto';
    $marker['infowindow_content'] = 'Air Canada Center';
    GMaps::add_marker($marker);

    $marker['position'] = 'CN Tower, toronto';
    $marker['infowindow_content'] = 'CN Tower';
    GMaps::add_marker($marker);

    $map = GMaps::create_map();

    return view('welcome')->with('map',$map);
});