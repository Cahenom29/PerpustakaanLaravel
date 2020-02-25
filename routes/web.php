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
    return view('halaman_utama');
});
Route::get('/signin', 'AuthController@signin')->name('signin');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/signout', 'AuthController@signout');
// Route::get('/home','HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', 'DashboardController@index')
    ->name('dashboard')->middleware('auth');


    Route::get('/buku','BukuController@index')->name('buku');
    Route::get('/buku/create','BukuController@create');
    Route::post('/buku/store', 'BukuController@store')->name('foto_cover');
    Route::get('/buku/{id}','BukuController@show')->name('detail');
    Route::get('/buku/delete/{id}','BukuController@destroy')->name('delete');
    Route::put('/buku/update/{id}', 'BukuController@update')->name('update');
    Route::get('/buku/edit/{id}', 'BukuController@edit');
    Route::get('/buku/detail/{id}', 'BukuController@show');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
