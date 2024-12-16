<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/register', [AdminController::class, 'showRegister'])->name('admin.register');
Route::post('/admin/verificacion', [AdminController::class, 'register'])->name('admin.register.submit');

Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

Route::get('/admin/profile', [AdminController::class, 'showProfile'])->name('admin.profile');
Route::post('/admin/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');

Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');

Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::get('/admin/datos', [AdminController::class, 'getUserSensorData'])->name('admin.datos');

Route::get('/admin/contactos', [AdminController::class, 'showcontactos'])->name('admin.contactos');

Route::post('/contactos', [AdminController::class, 'store'])->name('contactos.store');

Route::put('/contactos/{id}', [AdminController::class, 'update'])->name('contactos.update');
Route::delete('/contactos/{id}', [AdminController::class, 'destroy'])->name('contactos.destroy');

Route::get('/admin/recuperacion', [AdminController::class, 'showRecuperacion'])->name('admin.recuperacion');
Route::post('/admin/recuperacion', [AdminController::class, 'updatelogin'])->name('admin.recuperacion.submit');

Route::get('/admin/verificacion', [AdminController::class, 'showVerificacion'])->name('admin.verificacion');
Route::post('/admin/register', [AdminController::class, 'verificacion'])->name('admin.verificacion.submit');

Route::delete('/profile/{id}', [AdminController::class, 'profiledestroy'])->name('profile.destroy');

Route::post('/admin/register-mobile', [AdminController::class, 'registerApp'])->name('admin.registerApp.mobile');

Route::get('/get-csrf-token', function () {
    return response()->json(['csrf_token' => csrf_token()]);
}); 

Route::get('/pulsera/conexion', function() {
    return view('pulsera/conexion');
});
Route::get('/pulsera/consulta', function() {
    return view('pulsera/consulta');
});
Route::post('/pulsera/agregar', function() {
    return view('pulsera/agregar');
});

Route::get('/admin/dispositivo', [AdminController::class, 'showdispositivo'])->name('admin.dispositivo');

Route::post('/dispositivo', [AdminController::class, 'storeD'])->name('dispositivo.store');

Route::put('/dispositivo/{id}', [AdminController::class, 'updateD'])->name('dispositivo.update');
Route::delete('/dispositivo/{id}', [AdminController::class, 'destroyD'])->name('dispositivo.destroy');
