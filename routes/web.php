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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/u/{user}', 'ProfileController@index');
Route::get('profile/{id}', 'ProfileController@showWave');
Route::get('wave/{id}', 'WaveController@showProfile');

Route::resource('waves', 'WaveController');
Route::resource('comments', 'CommentController');
Route::resource('profiles', 'ProfileController');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');
