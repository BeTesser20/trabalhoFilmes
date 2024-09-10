<?php

use App\Http\Controllers\FilmesController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicial');
})->name('index');

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/hello/{nome}', function($nome) {
    return "Olá {$nome}";
});

Route::get('/filmes', [FilmesController::class, 'index'])->name('filmes');
// quando acassar a rota via get animais ele vai pegar a funcao  controller e executar o index

Route::get('/filmes/cadastrar', [FilmesController::class, 'cadastrar'])->name('filmes.cadastrar');

Route::post('/filmes/cadastrar', [FilmesController::class, 'gravar'])->name('filmes.gravar');

Route::get('filmes/apagar/{animal}', [FilmesController::class, 'apagar'])->name('filmes.apagar');

Route::delete('filmes/apagar/{animal}', [FilmesController::class, 'deletar']);

Route::get('/filmes/editar/{animal}', [FilmesController::class, 'editar'])->name('filmes.editar');

Route::put('/filmes/editar/{animal}', [FilmesController::class, 'editarGravar']);


Route::prefix('usuarios')->middleware('auth')->group(function() {
    Route::get('/', [UsuariosController::class, 'index'])->name('usuarios');

    Route::get('/cadastrar', [UsuariosController::class, 'cadastrar'])->name('usuarios.cadastrar');

    Route::post('/cadastrar', [UsuariosController::class, 'gravar'])->name('usuarios.gravar');

    Route::get('/apagar/{usuario}', [UsuariosController::class, 'apagar'])->name('usuarios.apagar');

    Route::delete('/apagar/{usuario}', [UsuariosController::class, 'deletar']);

    Route::get('/editar/{usuario}', [UsuariosController::class, 'editar'])->name('usuarios.editar');

    Route::put('/editar/{usuario}', [UsuariosController::class, 'editarGravar']);
});

// quando acassar a rota via get animais ele vai pegar a funcao  controller e executar o index


Route::get('login', [UsuariosController::class, 'login'])->name('login');

Route::post('login', [UsuariosController::class, 'login']);

Route::get('logout', [UsuariosController::class, 'logout'])->name('logout');