<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Endereco;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('conta');
    }

    public function alterarConta()
    {
        $enderecos = Endereco::all();
        return view('alterarConta', compact('enderecos'));
    }

    public function update(Request $request)
    {
        $id = auth()->user()->id;
        
        $usuario = User::find($id);     
        $usuario->name = $request->input('nome');
        $usuario->email = $request->input('email');
        $usuario->cpf = $request->input('cpf');
        $usuario->telefone = $request->input('telefone');
        $usuario->password = bcrypt($request->input('password'));
        
        $enderecos = Endereco::all();
        foreach  ($enderecos as $endereco){
       
        }
       
       if(isset($endereco) && $endereco->id_usuario == $id ){;
            $id = $endereco->id_endereco;
    
            $endereco = Endereco::find($id); 
            $endereco->cep = $request->input('cep');
            $endereco->logradouro = $request->input('logradouro');
            $endereco->bairro = $request->input('bairro');
            $endereco->uf = $request->input('uf');
            $endereco->cidade = $request->input('cidade');
            $endereco->numero = $request->input('numero');
            $endereco->complemento = $request->input('complemento');
            
            $update_end = $endereco->save();
            return redirect()
            ->route('home');
       }else{
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

            return redirect()
                ->route('home');
       }

        
        $update = $usuario->save();
      
        if ($update) {
            return redirect()
                ->route('home')
                ->with('success', 'Dados atualizados com sucesso');
        } else {
            return redirect()
                ->back()
                ->with('error', 'Não foi possível alterar os dados. Por favor, tente novamente');
        }
    }

    public function delete()
    {
        $id = auth()->user()->id;

        $usuario = User::find($id);
        
        $enderecos = Endereco::all();
        foreach  ($enderecos as $endereco){
       
        }
        $endereco = Endereco::find($endereco->id_endereco);  
        
        
        $delete = $usuario->delete();
        $delete_end = $endereco->delete();
        
        if ($delete) {
            return redirect()
                ->route('register')
                ->with('success', 'Usuário excluído com sucesso');
        } else {
            return redirect()
                ->back()
                ->with('error', 'Não excluir o usuário. Por favor, tente novamente');
        }
    }
}
