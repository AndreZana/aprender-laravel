<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContactController;


Route::namespace('Site')->group(function () {
    Route::get('/', 'HomeController')->name('site.home');

    Route::get('produtos', 'CategoryController@index')->name('site.products');
    Route::get('produtos/{category}', 'CategoryController@show')->name('site.products.category');

    Route::get('blog', 'BlogController')->name('site.blog');

    Route::view('sobre', 'site.about.index')->name('site.about');

    Route::get('contato', 'ContactController@index')->name('site.contact');
    Route::post('contato', 'ContactController@form')->name('site.contact.form');
});