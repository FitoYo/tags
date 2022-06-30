<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/', 'PostController@index')->name('posts.index');

Route::post('guardar-post', 'PostController@store')->name('posts.store');