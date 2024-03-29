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

Route::get('/', function () {
    return view('home');
});

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::get('/sobremim', function () {
    return view('sobreMim');
})->name('sobre_mim');

Route::get('/confirmacao', function () {
    return view('confirmacaoMensagem');
})->name('confirmacao');

Route::get('/artigo', function () {
    return view('artigo');
})->name('artigo');

Route::get('/meublog', function () {
    return view('meuBlog');
})->name('meu_blog');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/restrito', function () {
    return redirect()->route('ar_posts');
})->name('ar');

Route::get('/restrito/posts', function () {
    return view('AreaRestrita/homeRestrito');
})->name('ar_posts');

Route::get('/restrito/categorias', function () {
    return view('AreaRestrita/categorias');
})->name('ar_categorias');

Route::get('/restrito/escritores', function () {
    return view('AreaRestrita/escritores');
})->name('ar_escritores');

Route::get('/restrito/comentarios', function () {
    return view('AreaRestrita/comentarios');
})->name('ar_comentarios');
