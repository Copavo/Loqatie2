<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//
//Route::get('/', function () {
//    return "Homepage";
//});
//
//Route::get('/contact', 'PostsController@contact');
//
//Route::get('/page/{id}/{title}', 'PostsController@page');
//
//Route::get('/lokatie/{id}/{title}', 'PostsController@lokatie');
//

Route::get('/insert', function(){

    DB::insert('INSERT INTO posts(title, content) values (?, ?)', ['Nieuws!', 'Wow gek!']);

});

Route::get('/read', function(){

    $results = DB::select('SELECT * FROM posts');

    echo $results['title'];
});