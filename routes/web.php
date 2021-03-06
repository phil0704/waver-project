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
Route::get('users', 'HomeController@users')->name('users');
Route::get('user/{id}', 'ProfileController@show')->name('users.view');
Route::get('user/{id}/edit', 'ProfileController@edit')->name('users.edit');
Route::post('user/{id}/edit', 'ProfileController@store')->name('users.store');

Route::resource('waves', 'WaveController');
Route::resource('comments', 'CommentController');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');

Route::post('/follow', 'UserController@followOrUnfollowUser');

Route::get('/y', function() {
    $user = Auth::user();
    $user->notify(new Newfollower(User::findOrFail(2)));
});
