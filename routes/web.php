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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/posts/{post}', 'PostController@single');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PostController@all');
// wrote /admin/{any} here because we intend to serve every page of the admin dashboard using the Vue router.
Route::get('/admin/{any}', 'AdminController@index')->where('any', '.*');
