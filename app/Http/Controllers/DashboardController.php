<?php

namespace App\Http\Controllers;

use App\Models\Despesa;
use App\Models\Receita;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $mesAtual = Carbon::now()->format('m');
        $anoAtual = Carbon::now()->format('Y');

        // Total de despesas do mês atual
        $totalDespesas = Despesa::whereMonth('data', $mesAtual)
                                ->whereYear('data', $anoAtual)
                                ->sum('valor');

        // Total de receitas do mês atual
        $totalReceitas = Receita::whereMonth('data', $mesAtual)
                                ->whereYear('data', $anoAtual)
                                ->sum('valor');

        // Cálculo do saldo
        $saldo = $totalReceitas - $totalDespesas;

        // Últimas receitas (do mês atual também, se preferir pode manter sem filtro)
        $ultimasReceitas = Receita::whereMonth('data', $mesAtual)
                                ->whereYear('data', $anoAtual)
                                ->orderBy('data', 'desc')
                                ->take(5)
                                ->get();

        // Nome do mês e data atual formatada
        $nomeMes = Carbon::now()->locale('pt_BR')->translatedFormat('F');
        $dataHoje = Carbon::now()->format('d/m/Y');

        // Retorna a view com os dados
        return view('dashboard', compact(
            'totalReceitas',
            'totalDespesas',
            'saldo',
            'ultimasReceitas',
            'nomeMes',
            'dataHoje'
        ));
    }


    public function receitas()
    {
        $mesAtual = Carbon::now()->format('m');
        $anoAtual = Carbon::now()->format('Y');

        $totalDespesas = Despesa::whereMonth('data', $mesAtual)->whereYear('data', $anoAtual)->sum('valor');
        $totalReceitas = Receita::sum('valor');
        $saldo = $totalReceitas - $totalDespesas;

        $totalDespesas = Despesa::sum('valor');

        $nomeMes = Carbon::now()->locale('pt_BR')->translatedFormat('F');
        $dataHoje = Carbon::now()->format('d/m/Y');

        $receitas = Receita::latest()->take(5)->get();

        return view('dashboard', compact('saldo', 'totalDespesas', 'totalReceitas', 'totalDespesas', 'nomeMes', 'dataHoje', 'receitas'))
            ->with('viewParcial', 'partials.receitas');
    }

    public function despesas()
    {
        $mesAtual = Carbon::now()->format('m');
        $anoAtual = Carbon::now()->format('Y');

        $totalDespesas = Despesa::whereMonth('data', $mesAtual)->whereYear('data', $anoAtual)->sum('valor');
        $totalReceitas = Receita::sum('valor');
        $saldo = $totalReceitas - $totalDespesas;

        $totalDespesas = Despesa::sum('valor');

        $nomeMes = Carbon::now()->locale('pt_BR')->translatedFormat('F');
        $dataHoje = Carbon::now()->format('d/m/Y');

        $despesas = Despesa::latest()->take(5)->get();

        return view('dashboard', compact('saldo', 'totalDespesas', 'totalReceitas', 'totalDespesas', 'nomeMes', 'dataHoje', 'despesas'))
            ->with('viewParcial', 'partials.despesas');
    }
}
