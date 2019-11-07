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

Route::get('/', 'UserController@welcome');

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/lista', function () {
    return view('list');
});

Route::get('/panel', function () {
    return view('panel');
});

Route::get('/subcategories', 'CategoryController@subcategories')->name('Category.subcategories');
Route::get('/save', 'UserController@edit')->name('User.edit');
Route::get('/contraseña','HomeController@showChangePasswordForm');
Route::post('/updateImg', 'UserController@updateImg')->name('User.updateImg');


Auth::routes();

Route::get('/panel', 'HomeController@index')->name('panel');

Route::get('/actualizarContraseña','HomeController@changePassword')->name('User.updatePassword');
