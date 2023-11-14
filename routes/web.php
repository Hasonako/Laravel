<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\Controller@index') -> name('main');

Route::get('/new', 'App\Http\Controllers\Controller@new') -> name('new');
Route::post('/new', 'App\Http\Controllers\PostController@create') -> name('post');

Route::get('/delete/{id}', 'App\Http\Controllers\Controller@delete') -> name('delete');
Route::get('/update/{id}', 'App\Http\Controllers\Controller@update') -> name('update');

Route::get('/tags/{tags}', 'App\Http\Controllers\Controller@tags') -> name('tags');

Route::get('/admin', [
    'as' => 'start',
    'uses' => 'App\Http\Controllers\Controller@log_in',
    'middleware' => 'auth.very_basic'
]) -> name('login');