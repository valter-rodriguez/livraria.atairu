<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Produto_categoria;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


class ProdutoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $produtos = Produto::paginate(9);
        $categorias = Produto_categoria::all();
           
    }

    public function show($id_produto)
    {
        $produto =  Produto::find($id_produto);
        $categoria = Produto_categoria::find($id_produto);

        return view('produto', compact('produto', 'categoria'));
    }

    public function admin()
    {
        $produto = Produto::all();
        $categoria = Produto_categoria::all();
        $auth= auth()->user()->auth;
        if($auth){
            return view('admin', compact('produto', 'categoria'));
        }else{
            return view('home');
        }
        

    }

    public function create()
    {
        $categorias = Produto_categoria::all();
        
        $auth= auth()->user()->auth;
        if($auth){
            return view('cadastroProduto', compact('categorias'));
        }else{
            return view('home');
        }
    }


    public function insert(Request $request)
    {

        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->sinopse = $request->sinopse;
        $produto->autor = $request->autor;
        $produto->isbn = $request->isbn;
        $produto->numero_paginas = $request->numero_paginas;
        $produto->ano_publicacao = $request->ano_publicacao;
        $produto->edicao = $request->edicao;
        $produto->editora = $request->editora;
        $produto->preco = $request->preco;
        $produto->id_categoria = $request->categoria;

        $arquivo = $request->file('imagem');
        if (!empty($arquivo)) {
            // salvando
            $nomePasta = 'livros';
            $arquivo->storePublicly($nomePasta); // nome temporario do arquivo
            $caminhoAbsoluto = public_path() . "/img/$nomePasta";
            $nomeArquivo = $arquivo->getClientOriginalName(); // faz a hash para nome do arquivo
            $caminhoRelativo = "/img/$nomePasta/$nomeArquivo";
            // movendo
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
            $produto->imagem = $caminhoRelativo;
        }

        $produto->save();

        return redirect('/admin/produto');
    }

    public function update($id_produto)
    {
        $produto = Produto::find($id_produto);
        $categorias = Produto_categoria::all();

        $auth= auth()->user()->auth;
        if($auth){
            return view('editarProduto', compact('produto', 'categorias'));
        }else{
            return view('home');
        }
    }

    public function put(Request $request, $id_produto)
    {
        $produto = Produto::find($id_produto);

        $produto->nome = $request->nome;
        $produto->sinopse = $request->sinopse;
        $produto->autor = $request->autor;
        $produto->isbn = $request->isbn;
        $produto->numero_paginas = $request->numero_paginas;
        $produto->ano_publicacao = $request->ano_publicacao;
        $produto->edicao = $request->edicao;
        $produto->editora = $request->editora;
        $produto->preco = $request->preco;
        $produto->id_categoria = $request->categoria;

        $arquivo = $request->file('imagem');
        if (!empty($arquivo)) {
            // salvando
            $nomePasta = 'livros';
            $arquivo->storePublicly($nomePasta); // nome temporario do arquivo
            $caminhoAbsoluto = public_path() . "/img/$nomePasta";
            $nomeArquivo = $arquivo->getClientOriginalName(); // faz a hash para nome do arquivo
            $caminhoRelativo = "/img/$nomePasta/$nomeArquivo";
            // movendo
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
            $produto->imagem = $caminhoRelativo;
        }

        $produto->save();

        return redirect('/admin/produto');
    }

    public function delete($id_produto)
    {
        $produto = Produto::find($id_produto);

        $auth= auth()->user()->auth;
        if($auth){
            return view('deletarProduto', compact('produto'));
        }else{
            return view('home');
        }
        
    }

    public function remove($id_produto)
    {
        $produto = Produto::find($id_produto);

        $image_path = $produto->imagem;

        if (Storage::exists($image_path)) {
            Storage::delete($image_path);
        }

        $produto->delete();

        return redirect('/admin/produto');
    }

    public function filtroCategoria($id_categoria)
    {
        $produtos = Produto::where('id_categoria', '=', $id_categoria)->paginate(3);
        $categoria = Produto_categoria::find($id_categoria);
        $nomeCategoria = $categoria->nome_categoria;

        return view('produtos', compact('produtos', 'nomeCategoria'));
    }
}
