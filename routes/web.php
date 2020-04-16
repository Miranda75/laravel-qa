<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('about',    ['as' => 'page.about', function(){
    return view('about');
}]);
Route::get('services',    ['as' => 'page.services', function(){
    return view('services');
}]);
Route::get('contact',    ['as' => 'page.contact', function(){
    return view('contact');
}]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('tasks', 'TaskController');

Route::get('tasks/important', 'TaskController@important');
Route::resource('tasks', 'TaskController');
