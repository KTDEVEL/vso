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
    return view('hompage');
})->name('homepage');

Route::get('home/courses', function () {
    return view('courses');
})->name('courses');

Route::get('home/register', function () {
    return view('register');
})->name('register');

Route::get('home/create', function () {
    return view('create');
})->name('create');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
