<?php

use App\Http\Controllers\webController;
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
    return view('usuario.loginUsuario');
});
Auth::routes();

Route::group(['middleware' => ['auth', 'verified']], function(){ //comprueba si el usuario es admin o no es
    Route::get('home', [App\Http\Controllers\webController::class, 'index'])->name('home');
    Route::resource('usuario', webController::class)->middleware('role:role_id'); //sirve para usarlo en {{route(usuario.vistaquequeremosutilizar)}}
    Route::get('/crear_user', [App\Http\Controllers\webController::class, 'crear_user'])->name('crear_user')->middleware('role:role_id'); //el middleware hace que solo los admins puedan crear usuarios
    Route::post('/newUsuario', [App\Http\Controllers\webController::class, 'newUsuario'])->name('newUsuario');
    Route::get('/logout', [App\Http\Controllers\webController::class, 'logout'])->name('logout');

    Route::post('/list_usuarios', [App\Http\Controllers\webController::class, 'list_usuarios'])->name('list_usuarios'); //javascript tablejs
    Route::get('/delete_user/{id}', [App\Http\Controllers\webController::class, 'delete_user'])->name('delete_user');
    Route::get('/get_user/{id}', [App\Http\Controllers\webController::class, 'get_user'])->name('get_user');
    Route::post('/edit_product', [App\Http\Controllers\webController::class, 'edit_product'])->name('edit_product');
});

/*Route::resource('usuario', 'App\Http\Controllers\webController');
Route::post('crearUsuario', [App\Http\Controllers\webController::class, 'store']);
Route::get('registrar', [App\Http\Controllers\webController::class, 'registrar'])->name('registrar');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home', [App\Http\Controllers\webController::class, 'index'])->name('home');
Route::get('users', [App\Http\Controllers\webController::class, 'users'])->name('users');
Route::get('/editUsuario', [App\Http\Controllers\webController::class, 'editUsuario'])->name('editUsuario');
Route::post('/editarUsuario', [App\Http\Controllers\webController::class, 'editarUsuario'])->name('editarUsuario');
Route::get('addUser', [App\Http\Controllers\webController::class, 'addUser'])->name('addUser');
Route::get('editUser', [App\Http\Controllers\webController::class, 'editUser'])->name('editUser');*/

