<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function lista()
    {
        $search = request('search');

        if ($search) {
            $produtos=Produto::where([
                ['nome','like', '%'.$search.'%']
                ])->get();
        }else{
            $produtos = Produto::all();
        }
        return view('produtos', ['produtos' => $produtos,'search' => $search]);
    }

    public function mostra($id)
    {
        $produto = Produto::find($id);
        if (empty($produto)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $produto);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function adiciona(Request $request)
    {
        // Validação dos dados recebidos
        $request->validate([
            'nome' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'descricao' => 'nullable|string',
            'quantidade' => 'required|integer|min:1',
        ]);

        // Criação do produto
        Produto::create($request->all());

        // Redireciona para a lista de produtos com mensagem de sucesso
        return redirect()
            ->route('produtos.lista')
            ->with('success', 'Produto adicionado com sucesso!')
            ->withInput($request->only('nome'));
    }

    public function remove($id)
    {
        Produto::destroy($id);

        return redirect('/produtos/lista')->with('success', 'Produto removido com sucesso');
    }
    public function lista2()
    {
        
        return view('produtos.lista');
    }
}
