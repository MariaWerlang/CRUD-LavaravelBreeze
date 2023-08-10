<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClienteController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/registrar-cliente', [ClienteController::class, 'create'])->middleware(['auth'])->name('cliente.registrar');

Route::post('/registrar-cliente', [ClienteController::class, 'store'])->middleware(['auth']);

Route::get('/listar-clientes', [ClienteController::class, 'list'])->middleware(['auth'])->name('cliente.listar');

Route::get('/editar-cliente/{clientes}', [ClienteController::class, 'edit'])->middleware(['auth'])->name('cliente.editar');

Route::patch('/editar-cliente/{clientes}', [ClienteController::class, 'update'])->middleware(['auth'])->name('cliente.update');

Route::delete('/listar-clientes/{clientes}', [ClienteController::class, 'destroy'])->middleware(['auth'])->name('cliente.destroy');