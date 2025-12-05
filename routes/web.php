<?php
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminDashboardController;
use App\Models\Driver;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Ruta para el dashboard del motorizado
Route::get('/motorizado/dashboard', function () {
    $user = Auth::user();
    $driver = Driver::where('user_id', $user->id)->first();
    return view('motorizado.dashboard', compact('user', 'driver'));
})->name('motorizado.dashboard')->middleware('auth');

Route::get('/hola', function () {
    return 'Hola desde MotoPerfil';
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/stats', [AdminDashboardController::class, 'stats']);

    // Gestión de usuarios
    Route::get('/users', [AdminDashboardController::class, 'usersIndex']);
    Route::post('/users', [AdminDashboardController::class, 'usersStore']);
    Route::put('/users/{user}', [AdminDashboardController::class, 'usersUpdate']);
    Route::delete('/users/{user}', [AdminDashboardController::class, 'usersDestroy']);
    Route::post('/users/{user}/role', [AdminDashboardController::class, 'setUserRole']);
    Route::post('/users/{user}/ban', [AdminDashboardController::class, 'usersBan']);

    // Configuraciones del sistema
    Route::get('/settings', [AdminDashboardController::class, 'settingsIndex']);
    Route::post('/settings', [AdminDashboardController::class, 'settingsUpdate']);

    // Logs de actividad administrativa
    Route::get('/activity-logs', [AdminDashboardController::class, 'activityLogs']);

    Route::get('/recent-activity', [AdminDashboardController::class, 'recentActivity']);
});

// Agregar esta ruta al archivo de rutas existente
Route::post('/register-driver', [App\Http\Controllers\DriverController::class, 'register'])->name('register.driver');
