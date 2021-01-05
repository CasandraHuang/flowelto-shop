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


Auth::routes();

Route::get('/handmade', 'HomeController@index')->middleware('checkAuth');
Route::get('pesan/{id}','PesanController@index')->middleware('checkAuth');
Route::post('pesan/{id}','PesanController@pesan');
Route::get('/', 'TitleController@index');
Route::get('handmade/{id}', 'TitleController@title');
Route::get('check_out', 'PesanController@check_out');
Route::get('home', 'PesanController@check_out');
Route::delete('check_out/{id}', 'PesanController@delete');
Route::get('konfirmasi-check_out', 'PesanController@conf');
Route::get('transaction', 'PesanController@transaksi');
Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
Route::get('/create', 'HomeController@create');
Route::post('/handmade', 'HomeController@store');
Route::get('/handmade/{id}/edit', 'HomeController@edit');
Route::put('/handmade/{id}', 'HomeController@update');
Route::delete('/handmade/{id}', 'HomeController@delete');
Route::get('/home/{id}/edit', 'TitleController@edit');
Route::put('/home/{id}', 'TitleController@update');
Route::delete('/home/{id}', 'TitleController@delete');
