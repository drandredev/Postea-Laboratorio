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

use App\Mail\WelcomeEmail;



Route::redirect('/', '/posts');
Route::redirect('/home', '/posts');
Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::delete('posts/{id}', 'PostController@eliminar')
    ->name('posts.eliminar');
Route::get('/email', function (){
    return new WelcomeEmail();
});
Route::post('/posts', 'PostController@store');
Route::get('/posts/myPosts', 'PostController@userPosts');
Route::get('/edit', 'UserController@edit');
Route::get('/posts/{id}', 'PostController@show')->name('post');
Route::post('/comments', 'CommentController@store');
Auth::routes();