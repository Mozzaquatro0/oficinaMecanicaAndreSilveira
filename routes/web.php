<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServicoController;

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


Route::match(['get', 'post'], '/', [ClienteController::class, 'index'])->name('users.index');

Route::get('/users/create', [ClienteController::class, 'create'])->name('users.create');

Route::post('/users', [ClienteController::class, 'store'])->name('users.store');

Route::match(['get', 'post'], '/users/{user}', [ClienteController::class, 'show'])->name('users.show');

Route::get('/users/{user}/edit', [ClienteController::class, 'edit'])->name('users.edit');

Route::put('/users/{user}', [ClienteController::class, 'update'])->name('users.update');

Route::delete('/users/{user}', [ClienteController::class, 'destroy'])->name('users.destroy');
//

Route::get('/servicos/create}', [ServicoController::class, 'create'])->name('servicos.create');
Route::post('/servicos', [ServicoController::class, 'store'])->name('servicos.store');
Route::match(['get', 'post'], '/servicos/{servico}', [ServicoController::class, 'show'])->name('servicos.show');
Route::put('/servicos/{servico}', [ServicoController::class, 'update'])->name('servicos.update');
Route::delete('/servicos/{servico}', [ServicoController::class, 'destroy'])->name('servicos.destroy');









    





    