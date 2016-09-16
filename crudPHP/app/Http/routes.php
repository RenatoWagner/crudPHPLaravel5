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


Route::get('/', 'PagesController@getIndex')->name('/');

Route::get('about', 'PagesController@getAbout')->name('about');

Route::get('help', 'PagesController@getHelp')->name('help');

Route::get('contact', 'PagesController@getContact')->name('contact');

Route::get('first/second', function () {
    return view('pages.teste');
});

Route::resource('pessoa', 'PessoaController');
