<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
});
Auth::routes();
Route::get('IniciarSesion', [App\Http\Controllers\webController::class, 'IniciarSesion'])->name('IniciarSesion');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home', [App\Http\Controllers\webController::class, 'index'])->name('home');
Route::get('users', [App\Http\Controllers\webController::class, 'users'])->name('users');
Route::get('/editUsuario', [App\Http\Controllers\webController::class, 'editUsuario'])->name('editUsuario');
Route::post('/editarUsuario', [App\Http\Controllers\webController::class, 'editarUsuario'])->name('editarUsuario');

/*Route::resource('usuario', 'App\Http\Controllers\webController');
Route::post('crearUsuario', [App\Http\Controllers\webController::class, 'store']);
Route::get('registrar', [App\Http\Controllers\webController::class, 'registrar'])->name('registrar');

Route::get('addUser', [App\Http\Controllers\webController::class, 'addUser'])->name('addUser');
Route::get('editUser', [App\Http\Controllers\webController::class, 'editUser'])->name('editUser');*/

