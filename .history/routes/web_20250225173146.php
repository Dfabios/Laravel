<?php


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


Route::get('/', [ProdutoController::class, 'produtos.lista']);
Route::get('/produtos', [ProdutoController::class, 'lista'])->name('produtos.lista');
Route::get('/produtos/mostra/{id}', [ProdutoController::class, 'mostra']);
Route::get('/produtos/lista', [ProdutoController::class, 'lista'])->name('produtos.lista');
Route::get('/produtos/novo', [ProdutoController::class, 'novo']);
Route::post('/produtos/adiciona', [ProdutoController::class, 'adiciona'])->name('produtos.adiciona');
Route::get('/produtos/remove/{id}', [ProdutoController::class, 'remove'])->name('produtos.remove');
Route::get('/produtos/pesquisar', [ProdutoController::class, 'pesquisar'])->name('produtos.pesquisar');
Route::get('/produtos/lista', [ProdutoController::class, 'lista'])->name('produtos.lista');

require __DIR__.'/auth.php';
