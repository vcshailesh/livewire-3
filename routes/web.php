<?php

use App\Livewire\CreatePost;
use App\Livewire\Home;
use App\Livewire\Posts;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

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

Route::get('/', Home::class)->name('home');

Route::get('todos', Todos::class)->name('todos');

Route::group(['prefix' => 'posts', 'as' => 'posts.'], function() {
    Route::get('/', Posts::class)->name('index');
    Route::get('create', CreatePost::class)->name('create');
});
