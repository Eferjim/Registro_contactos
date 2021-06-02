<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MedioController;
use App\Http\Controllers\TareaController;
use Illuminate\Auth\Events\Login;

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
    return view('welcome');
});

//CONTACTO
Route::get('/mostrarContacto', [ContactoController::class, 'mostrarContacto'])->name('contacto');

Route::get('/mostrarContacto/crearContacto', [ContactoController::class, 'crearContacto'])->name('contacto.crearContacto');
Route::post('contactos', [ContactoController::class, 'store'])->name('contactos.store');
Route::get('search', [ContactoController::class, 'search'])->name('contactos.search');

// Route::get('contacto/{id}', [ContactoController::class, 'show'])->name('contacto.show');
Route::get('contacto/{id}/editar', [ContactoController::class, 'editar'])->name('contacto.editar');
Route::put('contacto/{id}', [ContactoController::class, 'update'])->name('contacto.update');
Route::delete('contacto/{id}', [ContactoController::class, 'destroy'])->name('contacto.destroy');


Route::get('/crearEmpresa', [EmpresaController::class, 'crearEmpresa'])->name('empresa.crearEmpresa');
Route::post('empresas', [EmpresaController::class, 'store'])->name('empresas.store');
Route::get('/mostrarContacto/empresaRegistrada', [EmpresaController::class, 'show'])->name('empresas.show');
Route::get('searchEmpresa', [EmpresaController::class, 'search'])->name('empresas.search');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('user', [UserController::class, 'authenticate'])->name('user.authenticate');
Route::get('/mostrarContacto/mostrarUsuario', [UserController::class, 'show'])->name('user.show');

Route::get('/crearMedio', [MedioController::class, 'create'])->name('crearMedio');
Route::post('medios', [MedioController::class, 'store'])->name('medios.store');

Route::get('/crearTarea', [TareaController::class, 'create'])->name('crearTarea');
Route::post('tareas', [TareaController::class, 'store'])->name('tareas.store');
Route::get('/mostrarContacto/mostrarTareas', [TareaController::class, 'show'])->name('tareas.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
