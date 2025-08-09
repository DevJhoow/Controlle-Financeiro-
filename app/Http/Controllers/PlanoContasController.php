<?php

namespace App\Http\Controllers;

use App\Models\Planejamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanoContasController extends Controller
{
    public function index()
    {
        $receitas = Planejamento::where('tipo', 'receita')->get();
        $despesas = Planejamento::where('tipo', 'despesa')->get();
        $planejamentos = Planejamento::where('tipo', 'planejamento')->get();

        return view('pagesUser.plano-contas', compact('receitas', 'despesas', 'planejamentos'));
    }

        // Exibir formulário de edição
    public function edit($id)
    {
        $item = Planejamento::findOrFail($id);
        return view('pagesUser.plano_itens-edit', compact('item'));
    }

    // Receber update do formulário
    public function update(Request $request, $id)
    {
        $request->validate([
            'descricao' => 'required|string|max:1000',
        ]);

        $item = Planejamento::findOrFail($id);
        $item->descricao = $request->descricao;
        $item->save();

        return redirect()->route('plano-contas-user')->with('success', 'Item atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $item = Planejamento::findOrFail($id);
        $item->delete();

        return redirect()->route('plano-contas-user')->with('success', 'Item excluído com sucesso!');
    }

}