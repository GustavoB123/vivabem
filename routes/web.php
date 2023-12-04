<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModalidadeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TreinoController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/sobre',[SobreController::class, 'index'])->name('sobre');

Route::get('/noticia', [NoticiaController::class, 'index'])->name('noticia');

// MODALIDADES
Route::get('/modalidade', [ModalidadeController::class, 'index'])->name('modalidade');
Route::get('/modalidade/artesmarciais', [ModalidadeController::class, 'artesmarciais'])->name('modalidade.artesmarciais');
Route::get('/modalidade/cardiovascular', [ModalidadeController::class, 'cardiovascular'])->name('modalidade.cardiovascular');
Route::get('/modalidade/musculacao', [ModalidadeController::class, 'musculacao'])->name('modalidade.musculacao');
Route::get('/modalidade/pilates', [ModalidadeController::class, 'pilates'])->name('modalidade.pilates');
Route::get('/modalidade/powerlifting', [ModalidadeController::class, 'powerlifting'])->name('modalidade.powerlifting');
Route::get('/modalidade/spa', [ModalidadeController::class, 'spa'])->name('modalidade.spa');
// ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

Route::get('/treino', [TreinoController::class, 'index'])->name('treino');
Route::get('/treino/hiit', [TreinoController::class, 'hiit'])->name('hiit');
Route::get('/treino/emagrecimento', [TreinoController::class, 'emagrecimento'])->name('emagrecimento');
Route::get('/treino/flexibilidade', [TreinoController::class, 'flexibilidade'])->name('flexibilidade');
Route::get('/treino/reabilitacao', [TreinoController::class, 'reabilitacao'])->name('reabilitacao');
Route::get('/treino/core', [TreinoController::class, 'core'])->name('core');
Route::get('/treino/dropset',[TreinoController::class, 'dropset'])->name('dropset');
Route::get('/treino/emom', [TreinoController::class, 'emom'])->name('emom');
