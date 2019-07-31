<?php
use App\Mail\ContactMessageCreated;

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


Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::get('/contact', 'ContactsController@create')->name('contacts.create');
Route::post('/contact', 'ContactsController@store')->name('contacts.store');



Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
