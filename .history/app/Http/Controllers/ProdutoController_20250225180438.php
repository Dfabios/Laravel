<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Lista produtos e permite busca
    public function lista()
    {
        $produtos = Produto::all();
        return view('produtos.lista', ['produtos' => $produtos]);
    }

    // Mostra detalhes de um produto específico
    public function mostra($id)
    {
        $produto = Produto::findOrFail($id);

        return view('produto.detalhes', ['p' => $produto]);
    }

    // Exibe o formulário para adicionar um novo produto
    public function novo()
    {
        return view('produto.formulario');
    }

    // Adiciona um novo produto ao banco de dados
    public function adiciona(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'descricao' => 'nullable|string',
            'quantidade' => 'required|integer|min:1',
        ]);

        Produto::create($request->all());

        return redirect()
            ->route('produtos.lista')
            ->with('success', 'Produto adicionado com sucesso!')
            ->withInput($request->only('nome'));
    }

    // Remove um produto pelo ID
    public function remove($id)
    {
        Produto::findOrFail($id)->delete();

        return redirect()
            ->route('produtos.lista')
            ->with('success', 'Produto removido com sucesso!');
    }
}
