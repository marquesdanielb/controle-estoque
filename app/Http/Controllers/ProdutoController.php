<?php

namespace Estoque\Http\Controllers;

use Estoque\Produto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = Produto::all();

        return view('produto.listagem', [
            'produtos' => $produtos,
        ]);
    }

    public function listaJson()
    {
        $produtos = Produto::all();

        return response()->json($produtos);
    }

    public function mostra($id)
    {
        $produto = Produto::find($id);

        if (empty($produto)) {
            return 'Esse produto não existe';
        }

        return view('produto.detalhes', [
            'produto' => $produto,
        ]);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function edita($id)
    {
        $produto = Produto::find($id);

        return view('produto.formulario', [
            'produto' => $produto,
        ]);
    }

    public function adiciona()
    {
        Produto::create(Request::all());

        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));
    }

    public function atualiza($id)
    {
        $produto = Produto::find($id);
        $produto->update(Request::all());

        return redirect()->action('ProdutoController@lista');
    }

    public function remove($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->action('ProdutoController@lista');
    }
}
