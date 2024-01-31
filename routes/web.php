<?php

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

Route::get('/', \App\Livewire\Home::class);

// Route::group(['middleware' => ['auth']], function () {
Route::prefix('admin')->group(function () {
    Route::get('/', \App\Livewire\Admin\Home::class);
    Route::prefix('blog')->group(function () {
        Route::get('/', \App\Livewire\Admin\Blog\Index::class);
        Route::get('/tambah', \App\Livewire\Admin\Blog\Form::class);
        Route::get('/edit/{key}', \App\Livewire\Admin\Blog\Form::class);
    });
    Route::prefix('service')->group(function () {
        Route::get('/', \App\Livewire\Admin\Service\Index::class);
        Route::get('/tambah', \App\Livewire\Admin\Service\Form::class);
        Route::get('/edit/{key}', \App\Livewire\Admin\Service\Form::class);
    });
    Route::get('/about', \App\Livewire\Admin\About::class);
    Route::get('/contact', \App\Livewire\Admin\Contact::class);
});
// });
