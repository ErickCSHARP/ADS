<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produtos::all();

        return view('index', compact('produtos'));
    }

    public function create()
    {
        return view('create');
    }
   
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required',
        ]);
        
        Produtos::create($request->post());

        return redirect()->route('produtos.index')->with('Sucesso','Produto cadastrado com sucesso!.');
    }

   
    public function edit(string $id)
    {
        $produto = Produtos::find($id);

        return view('edit')->with('produto', $produto);;
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required',
        ]);
        
        $produto = Produtos::find($id);
        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');
        $produto->save();


        return redirect()->route('produtos.index')->with('Sucesso','Produto atualizado com sucesso!');
    }

    public function destroy(string $id)
    {
        $produto = Produtos::find($id);
        $produto->delete();

        return redirect()->route('produtos.index')->with('Sucesso','Produto apagado com sucesso!');
    }

    public function show(string $id)
    {
        
    }

}
