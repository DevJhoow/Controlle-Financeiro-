<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('pagesUser.dashboard', compact('user'));
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Remove o usuário autenticado
        $request->session()->invalidate(); // Invalida a sessão
        $request->session()->regenerateToken(); // Regenera o token CSRF

        return redirect(route('home.index')); // Ou outra rota desejada
    }
}
