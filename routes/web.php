<?php

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

$home = App\Http\Controllers\HomeController::class;

$contatos = App\Http\Controllers\AgendaContatosController::class;

Route::get('/',[$home, 'index'])->name('home');

Route::get('/contatos', [$contatos, 'index'])->name('contato.index'); 
Route::get('/contatos-criar', [$contatos, 'create'])->name('contato.create'); 
Route::post('/contato-salvar', [$contatos, 'store'])->name('contato.store');

Route::get('/contato-editar/{id}', [$contatos, 'edit'])->name('contato.edit');
Route::put('/contato-alterar/{id}', [$contatos, 'update'])->name('contato.save');

Route::get('/contato-deletar/{id}', [$contatos, 'delete'])->name('contato.delete');
