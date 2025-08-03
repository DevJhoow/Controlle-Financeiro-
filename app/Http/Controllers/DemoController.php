<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
     public function relatorios() {
        return view('demo.relatorio');
    }

    public function fluxoCaixa() {
        return view('demo.fluxo-caixa');
    }

    public function planoContas() {
        return view('demo.plano-contas');
    }

    public function lancarReceita() {
        return view('demo.lancar-receita');
    }

    public function lancarDespesa() {
        return view('demo.lancar-despesa');
    }

    public function grafico() {
        return view('demo.grafico');
    }
}
