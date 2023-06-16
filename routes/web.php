<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
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
/*
Route::get('/', function () {
    return view('teste');
});
*/

Route::get(uri:'/', action: [HomeController::class, 'index'])->name('home');

Route::get(uri:'/homelist', action: [ListController::class, 'homelist'])->name('homelist');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('index');
    })->name('/');
});
