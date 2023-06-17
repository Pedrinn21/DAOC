<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\LixoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/homelist', [ListController::class, 'homelist'])->name('homelist');
Route::get('/createlist/{user}/{lixo}', [ListController::class, 'create'])->name('create.list');
Route::get('/viewlist/{user}', [ListController::class, 'view'])->name('view.list');

Route::get('/search', [LixoController::class, 'search'])->name('searchlixo');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home/index');
    })->name('/');
});
