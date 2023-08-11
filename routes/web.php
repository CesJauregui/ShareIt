<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\DebateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\RepositorioController;
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

Route::get('/login', function () {
    return view('auth.app');
});

Route::middleware('auth')->group(function(){

    //Home
    Route::get('/', [HomeController::class, 'index'])->name('app');

    //Debates
    Route::get('/debates', [DebateController::class, 'index'])->name('debates');
    Route::post('/debates', [DebateController::class, 'store'])->name('debates.store');
    Route::get('/debates/{id}', [DebateController::class, 'show'])->name('debates.show');
    Route::post('/debates/{id}', [ComentarioController::class, 'store'])->name('comentarios.store');
    
    //Publicaciones
    Route::get('/publicaciones', [PublicacionController::class,'index'])->name('publicaciones');
    Route::post('/publicaciones', [PublicacionController::class, 'store'])->name('publicaciones.store');
    Route::get('/publicaciones/{id}', [PublicacionController::class, 'show'])->name('publicaciones.show');
    
    //Repositorio
    Route::get('/repositorio', [RepositorioController::class,'index'])->name('repositorio');
    Route::get('/repositorio/{id}', [RepositorioController::class,'show'])->name('repositorio.show');

    //Perfil
    Route::get('/profile', [PerfilController::class,'index'])->name('profile');
});

require __DIR__.'/auth.php';
