<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'HomeController@index');

Route::get('/services', 'ServicesController@index');
Route::get('/services-tshirt', 'ServicesController@seeTshirt');
Route::get('/services-lgfor-tarpaulin', 'ServicesController@seeLgforTarpaulin');

Route::get('/register', 'RegisterController@index');