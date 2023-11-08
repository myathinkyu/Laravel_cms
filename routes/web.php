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
//use small project
Route::get('/', function () {
    return view('welcome');
});

//use big project
//Route::get('/post/{username}/{password}', 'App\Http\Controllers\PostsController@privacy');

// Route::get('/home', function () {
//     return "This is Homepage."; 
// });

// Route::get('/about', function () {
//     return "This is About page."; 
// });

Route::get('/contact', 'App\Http\Controllers\PostsController@contact');
Route::get('/home/{name}/{country}', 'App\Http\Controllers\PostsController@home');
Route::get('/about', 'App\Http\Controllers\PostsController@about');

Route::resource('/posts', 'App\Http\Controllers\PostsController');

// Route::get('/post/{id}/{title}', function($id, $title) {
//     return "The post id is " . $id . " and the post title is " . $title; 
// });

// Route::get('/post/example/test/title/personal/hey', function () {
//     return "The post has long URL"; 
// });

// Route::get('/post/example/test/title/personal/hey', array('as'=>'localhost/laravel_cms/public/', function () {
//     $url = route('localhost/laravel_cms/public/');
//     return "The url is " . $url; 
// }));





