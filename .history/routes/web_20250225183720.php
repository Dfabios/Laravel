<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


Route::get('/produtos', [ProdutoController::class, 'lista'])->name('produtos.lista');
Route::get('/produtos/mostra{id}', [ProdutoController::class, 'mostra'])->name('produtos.mostra');
Route::get('/produtos/novo', [ProdutoController::class, 'novo'])->name('produtos.novo');
Route::post('/produtos', [ProdutoController::class, 'adiciona'])->name('produtos.adiciona');
Route::delete('/produtos/{id}', [ProdutoController::class, 'remove'])->name('produtos.remove');

require __DIR__.'/auth.php';
