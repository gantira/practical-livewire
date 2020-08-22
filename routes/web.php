<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => ['auth']], function () {

    Route::get('/', 'HomeController')->name('home');
    Route::livewire('users/table', 'users.table')->layout('layouts.app', ['title' => 'Users Data Table']);

    Route::livewire('products', 'products.index')->layout('layouts.app', ['title' => 'All Product']);
});
