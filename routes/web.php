<?php

use App\Http\Controllers\DebateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/debate', [DebateController::class, 'index'])->name('debate');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/debate', [DebateController::class, 'store'])->name('debate.store');
});
