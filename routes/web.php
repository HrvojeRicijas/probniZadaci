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

Route::get("/", function () {
    return view('welcome');
});

Route::get("/posts/all/{sort}", 'PostController@index')->name('posts');

/*
Route::get("/posts", function () {
    return view('/posts/posts');
});
*/



Route::middleware('auth')->group(function () {
    Route::get('/posts/create', "PostController@create");
});


Route::post("/posts/create", "PostController@store")->name('post.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/test", function(){
    return view("test");
});

Route::get("/posts/all", function () {
    return redirect('/posts/all/1');
});
Route::get("/posts", function () {
    return redirect('/posts/all/1');
});
Route::get("/posts/{id}", "PostController@show");
