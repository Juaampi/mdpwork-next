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

use App\Http\Controllers\UserController;

Route::get('/', 'UserController@welcome');
Route::get('/lista', 'UserController@showlist') ->name('User.showlist');
Route::get('/perfil', 'UserController@showperfil')->name('User.perfil');

Route::get('/subcategories', 'CategoryController@subcategories')->name('Category.subcategories');
Route::post('/save', 'UserController@edit')->name('User.edit');
Route::get('/contraseña','HomeController@showChangePasswordForm');
Route::post('/updateImg', 'UserController@updateImg')->name('User.updateImg');
Route::get('/busqueda','UserController@search')->name('User.search');

Route::get('/coment', 'ComentController@addcoment')->name('Coment.add');

Route::get('/legales/terms', 'UserController@terms');
Route::get('/legales/privacy', 'UserController@privacy');
Route::get('/opciones', 'UserController@opciones');

Route::get('/ordenarPorNombre', 'UserController@ordenarPorNombre')->name('ordenarPorNombre');
Route::get('/ordenarPorZona', 'UserController@ordenarPorZona')->name('ordenarPorZona');
Route::get('/ordenarPorPuntaje', 'UserController@ordenarPorPuntaje')->name('ordenarPorPuntaje');

Route::get('/intro', function(){
    return view('intro');
});

Auth::routes();

Route::get('/registro', 'RegisterUsers@showRegistrationForm');

Route::get('/panel', 'HomeController@index')->name('panel');

Route::get('/actualizarContraseña','HomeController@changePassword')->name('User.updatePassword');

Route::group(['prefix' => 'auth'], function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
});

Route::get('/pre', function(){
    return view('auth.preregister');
});
