<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

// Rota para carregar a página principal (teste.blade.php)
Route::get('/', function () {
    return view('teste');
});

// Rota para a página index.blade.php
Route::get('/index', function () {
    return view('index'); // Aponta para resources/views/index.blade.php
})->name('ir.para.index'); // Nome da rota para facilitar o uso

// --- ROTAS ATUALIZADAS PARA CSS E JS ---

// Rota para servir o arquivo CSS
Route::get('/css/style.css', function () { // MUDOU AQUI: style.css
    $path = resource_path('css/style.css'); // MUDOU AQUI: style.css
    if (!File::exists($path)) {
        abort(404);
    }
    $content = File::get($path);
    return Response::make($content, 200, ['Content-Type' => 'text/css']);
});

// Rota para servir o arquivo JS
Route::get('/js/script.js', function () { // MUDOU AQUI: script.js
    $path = resource_path('js/script.js'); // MUDOU AQUI: script.js
    if (!File::exists($path)) {
        abort(404);
    }
    $content = File::get($path);
    return Response::make($content, 200, ['Content-Type' => 'application/javascript']);
});