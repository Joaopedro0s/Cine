<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

// Rota para carregar a página principal (teste.blade.php)
Route::get('/', function () {
    return view('teste');
});

// NOVA ROTA para a página index.blade.php
Route::get('/index', function () {
    return view('index'); // Aponta para resources/views/index.blade.php
})->name('ir.para.index'); // Nome da rota para facilitar o uso

// Rotas para servir os arquivos CSS e JS diretamente da pasta resources
Route::get('/css/app.css', function () {
    $path = resource_path('css/app.css');
    if (!File::exists($path)) {
        abort(404);
    }
    $content = File::get($path);
    return Response::make($content, 200, ['Content-Type' => 'text/css']);
});

Route::get('/js/app.js', function () {
    $path = resource_path('js/app.js');
    if (!File::exists($path)) {
        abort(404);
    }
    $content = File::get($path);
    return Response::make($content, 200, ['Content-Type' => 'application/javascript']);
});