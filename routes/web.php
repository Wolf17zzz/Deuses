<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeusesController;

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

Route::get('/Deuses', [DeusesController::class, 'index'])->name('Deuses.index');

// Rota para o formulário de criação de gatos
Route::get('/deuses/novo', [DeusesController::class, 'create'])->name('Deuses.create');

// Rota para o mostrar um gato específico
Route::get('/Deuses/{id}', [DeusesController::class, 'show'])->name('Deuses.show');

// Rota para o formulário de edição de gatos
Route::get('/Deuses/{id}/edit', [DeusesController::class, 'edit'])->name('Deuses.edit');

// Rota que armazena um novo gato no banco de dados
Route::post('/Deuses', [DeusesController::class, 'store'])->name('Deuses.store');

// Rota que atualiza um gato específico no banco de dados
Route::put('/Deuses/{id}', [DeusesController::class, 'update'])->name('Deuses.update');

// Rota que remove um gato específico do banco de dados
Route::delete('/Deuses/{id}', [DeusesController::class, 'destroy'])->name('Deuses.destroy');
