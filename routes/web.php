<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Связываем контроллер с маршрутом страницы

// Route::get('/my_page', 'App\Http\Controllers\MyPlaceController@index');


// Выводим данные на страницы

// Route::get('/posts2', 'App\Http\Controllers\PostController@index_2');
// Route::get('/posts3', 'App\Http\Controllers\PostController@index_3');
// Route::get('/posts4', 'App\Http\Controllers\PostController@index_4');
// Route::get('/posts5', 'App\Http\Controllers\PostController@index_5');



Route::get('/place', 'App\Http\Controllers\MyPlaceController@index');
Route::get('/place1', 'App\Http\Controllers\MyPlaceController@index_1');
Route::get('/place2', 'App\Http\Controllers\MyPlaceController@index_2');


// Создание, одновление и удаление нформации в БД

// Route::get('/first/create', 'App\Http\Controllers\PostController@create');
// Route::get('/first/create2', 'App\Http\Controllers\PostController@create_2');
// Route::get('/first/update', 'App\Http\Controllers\PostController@update');
// Route::get('/first/delete', 'App\Http\Controllers\PostController@delete');


//Подключение (и навигация между VIEW)

// Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('post.index');
// Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');
// Route::get('/content', 'App\Http\Controllers\ContentController@index')->name('content.index');
// Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');


// Маршрутизация проекта. Страница с постами

Route::get('/post', 'App\Http\Controllers\MyPlaceController@index')->name('post.index'); //index.php
Route::get('/post/create', 'App\Http\Controllers\MyPlaceController@create')->name('post.create'); // create post

Route::post('/post', 'App\Http\Controllers\MyPlaceController@store')->name('post.store');
Route::get('/post/{post}', 'App\Http\Controllers\MyPlaceController@show')->name('post.show'); // get post

Route::get('/post/{post}/edit', 'App\Http\Controllers\MyPlaceController@edit')->name('post.edit'); // edit post
Route::patch('/post/{post}', 'App\Http\Controllers\MyPlaceController@update')->name('post.update'); // edit post
