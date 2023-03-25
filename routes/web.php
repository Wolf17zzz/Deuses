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

Route::get('/deuses', [DeusesController::class, 'index'])->name('deuses.index');

// Rota para o formulário de criação de gatos
Route::get('/deuses/novo', [DeusesController::class, 'create'])->name('deuses.create');

// Rota para o mostrar um gato específico
Route::get('/deuses/{deuses}', [DeusesController::class, 'show'])->name('deuses.show');

// Rota para o formulário de edição de gatos
Route::get('/deuses/{deuses}/editar', [DeusesController::class, 'edit'])->name('deuses.edit');

// Rota que armazena um novo gato no banco de dados
Route::post('/deuses', [DeusesController::class, 'store'])->name('deuses.store');

// Rota que atualiza um gato específico no banco de dados
Route::put('/deuses/{deuses}', [DeusesController::class, 'update'])->name('deuses.update');

// Rota que remove um gato específico do banco de dados
Route::delete('/deuses/{deuses}', [DeusesController::class, 'destroy'])->name('deuses.destroy');
