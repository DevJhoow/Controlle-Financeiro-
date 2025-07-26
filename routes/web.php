<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReceitaController;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', [HomeController::class, 'index'])->name('home.index');

//Demostraçoes
Route::get('/demo/relatorios', function () {
    return view('demo.relatorio');
})->name('demo.relatorios');

Route::get('/demo/fluxo-caixa', function () {
    return view('demo.fluxo-caixa');
})->name('demo.fluxo-caixa');

Route::get('/demo/plano-contas', function () {
    return view('demo.plano-contas');
})->name('demo.plano-contas');

Route::get('/demo/lancar-receita', function () {
    return view('demo.lancar-receita');
})->name('demo.lancar-receita');

Route::get('/demo/lancar-despesa', function () {
    return view('demo.lancar-despesa');
})->name('demo.lancar-despesa');

Route::get('/demo/grafico', function () {
    return view('demo.grafico');
})->name('demo.grafico');

//login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

//registro
Route::get('/registrar', [AuthController::class, 'showRegistro'])->name('registro');
Route::post('/registrar', [AuthController::class, 'registro']);

//dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
});


