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
// トップページ
Route::get('/', function () {
    return view('top');
})->name('top');
// ログイン機能
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// このサイトについて
Route::get('/about', function () {
    return view('about');
})->name('about');
// あなたの思い出の景色
Route::get('/memory', function () {
    return view('memory');
})->name('memory');
Route::get('/memory/submit', function () {
    return view('memory/submit');
})->name('memory/submit');
Route::post('/memory/confirm', 'ImageController@upload')->name('memory/confirm');
Route::post('/memory/complete', function () {
    return view('memory/complete');
})->name('memory/complete');
