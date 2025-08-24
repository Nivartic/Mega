<?php
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Models\Driver;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Ruta para el dashboard del motorizado
Route::get('/motorizado/dashboard', function() {
    $user = Auth::user();
    $driver = Driver::where('user_id', $user->id)->first();
    return view('motorizado.dashboard', compact('user', 'driver'));
})->name('motorizado.dashboard')->middleware('auth');

Route::get('/hola', function () {
    return 'Hola desde MotoPerfil';
});

// Agregar esta ruta al archivo de rutas existente
Route::post('/register-driver', [App\Http\Controllers\DriverController::class, 'register'])->name('register.driver');
