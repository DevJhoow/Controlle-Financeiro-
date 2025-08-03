<?php

namespace App\Http\Controllers;

use App\Models\Lancamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RelatorioUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $user = Auth::user();

        $mesAtual = now()->month;
        $anoAtual = now()->year;

        $lancamentosMes = Lancamento::where('user_id', $user->id)->get();

        $totalReceitas = $lancamentosMes->where('tipo', 'receita')->sum('valor');
        $totalDespesas = $lancamentosMes->where('tipo', 'despesa')->sum('valor');
        $saldo = $totalReceitas - $totalDespesas;

        $ultimosLancamentos = $lancamentosMes->sortByDesc('data')->take(5);

        return view('pagesUser.relatorioUser', compact(
            'totalReceitas',
            'totalDespesas',
            'saldo',
            'ultimosLancamentos'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
