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
    return view('welcome');
});


Route::get('github-auth', 'Auth\AuthGithubController@redirectToGithub')->name('github-auth');
Route::get('callback-github', 'Auth\AuthGithubController@handleGithubCallback')->name('callback-github');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
