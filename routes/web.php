<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

//nuevo
use App\Models\User;
use App\Models\Playlist;
use App\Models\Cancion;
use App\Models\Artista;
use App\Models\Album;
//nuevo

Route::get('/', function () {
    return view('home');
}) -> middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
    -> middleware('guest')
    -> name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    -> name('register.store');



Route::get('/login', [SessionsController::class, 'create'])
    -> middleware('guest')
    -> name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    -> name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    -> middleware('auth')
    -> name('login.destroy');


// NUEVAS RUTAS

Route::get('/usuario', function () {
    return User::All();
});

Route::get('/playlist', function () {
    return Playlist::All();
});

Route::get('/cancion', function () {
    return Cancion::All();
});

Route::get('/artista', function () {
    return Artista::All();
});

Route::get('/album', function () {
    return Album::All();
});

// NUEVAS RUTAS
