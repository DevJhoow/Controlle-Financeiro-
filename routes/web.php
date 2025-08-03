<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReceitaController;
use App\Http\Controllers\RelatorioUserController;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', [HomeController::class, 'index'])->name('home.index');

//Demostraçoes
Route::prefix('demo')->name('demo.')->group(function () {
    Route::get('/relatorios', [DemoController::class, 'relatorios'])->name('relatorios');
    Route::get('/fluxo-caixa', [DemoController::class, 'fluxoCaixa'])->name('fluxo-caixa');
    Route::get('/plano-contas', [DemoController::class, 'planoContas'])->name('plano-contas');
    Route::get('/lancar-receita', [DemoController::class, 'lancarReceita'])->name('lancar-receita');
    Route::get('/lancar-despesa', [DemoController::class, 'lancarDespesa'])->name('lancar-despesa');
    Route::get('/grafico', [DemoController::class, 'grafico'])->name('grafico');
});

//login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

//registro
Route::get('/registrar', [AuthController::class, 'showRegistro'])->name('registro');
Route::post('/registrar', [AuthController::class, 'registro']);

//dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/relatorioUser', [RelatorioUserController::class, 'index'])->name('relatorio-user');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
});


