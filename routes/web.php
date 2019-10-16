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
    return view('pages.index');
});

Route::get('/projects', function () {
    return view('pages.project');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/dashboard', 'DashboardController@index');
// Route::post('/sub/cancel/{id}', 'PlansController@cancel');


Auth::routes();
Route::get('/services/service-details/', 'ProductsController@details');
Route::resource('services', 'ProductsController');
Route::resource('profile', 'ProfilesController');
Route::resource('plans', 'PlansController');
Route::get('/home', 'HomeController@index')->name('home');
