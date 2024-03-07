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

Route::get('/auth/login', [\App\Livewire\Web\Auth\Login::class, '__invoke'])
    ->name('web.login');

Route::get('/', [\App\Livewire\Web\Homepage::class, '__invoke'])
    ->name('web.homepage');

Route::group(['prefix' => 'products'], function () {
    Route::get('/', [\App\Livewire\Web\Product\Index::class, '__invoke'])
        ->name('web.product');
    Route::get('/detail/{id}', [\App\Livewire\Web\Product\Detail::class, '__invoke'])
        ->name('web.product.detail');
});


