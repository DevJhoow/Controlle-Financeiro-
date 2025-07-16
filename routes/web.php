<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReceitaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('index.dashboard');
Route::get('/dashboard/receita', [DashboardController::class, 'receitas'])->name('dashboard.receitas');
Route::get('/dashboard/despesas', [DashboardController::class, 'despesas'])->name('dashboard.despesas');


