<?php

use App\Http\Controllers\AcademiaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return (' Seja bem vindo!');
});

Route::get('/treino', function(){
    return "Lista de treinos disponiveis na academia";
});

Route::get('/personal', function(){
    return "Lista de personals diponiveis na academia";
});

Route::get('/cadastro/{nome}/{email}/{senha?}', function(string $nome = null, $email = null, $senha = null){
    echo "Seja bem vindo!<br>
    Nome: ".$nome."<br>
    Email: ".$email."<br>
    Senha: ".$senha."<br>";
});

Route::get('/academia', [AcademiaController::class, 'index'])->name('site.academia');

Route::prefix('app') ->group(function(){
    Route::get('/dicas', function(){return view('dicas');})->name('app.dicas');
    Route::get('/suplementos', function(){return view('suplementos');})->name('app.suplementos');
    Route::get('/equipamentos', function(){return view('equipamentos');})->name('app.equipamentos');
    
});


Route::fallback(function(){
    return view('naoencontrada');
});