<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endereco;
use App\User;

class EnderecoController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
       $auth= auth()->user()->auth;
      if($auth != true){
//          Verifica se o usuário é diferente de admin
          return view('endereco');
      }else{
          return view('home');
      }
       
    }
 
    public function create(Request $request) {     
        $id = auth()->user()->id;;
        $usuario = User::find($id);
        
        $endereco = Endereco::create(
            [   
                'cep' => $request->input('cep'),
                'logradouro' => $request->input('logradouro'),
                'bairro' => $request->input('bairro'),
                'uf' => $request->input('uf'),
                'cidade' => $request->input('cidade'),
                'numero' => $request->input('numero'),
                'complemento' => $request->input('complemento'),
                'id_usuario' => $id
            ]); 
        $endereco->save();
        
     return redirect('/conta')->with('mensagem', 'Produto criado com sucesso');
    }
   
}
