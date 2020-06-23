<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();

        $clientes = Cliente::paginate(4);
        return view('clientes.listar', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.adicionar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();

        $dados['status'] = 'Analisando';

        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $dir = "img/clientes";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$dados['nome'].".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }else{
            $dados['imagem'] = "img/sistema/sem_profile.png";
        }

        $dados['senha'] = Hash::make('123456');

        $insercao = Cliente::create($dados);

        $clientes = Cliente::find($insercao->id);

        $clientes['acao'] = "2";

        return view('clientes.adicionar', compact('clientes'))->withStatus('Perfil adicionado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = Cliente::find($id);

        $clientes['acao'] = "2";

        return view('clientes.adicionar', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = Cliente::find($id);

        $clientes['acao'] = "3";

        return view('clientes.adicionar', compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados = $request->all();

        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $dir = "img/clientes";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$dados['nome'].".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Cliente::find($id)->update($dados);

        $clientes = Cliente::find($id);

        $clientes['acao'] = "3";

        return redirect()->route('clientes.editar', compact('clientes'))->withStatus('Perfil atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::find($id)->delete();
        $clientes = Cliente::all();

        $clientes = Cliente::paginate(4);
        return redirect()->route('clientes.listar', compact('clientes'))->withStatus('Cliente excluido com sucesso.');
    }

    /**
     * Altera a imagem do perfil the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function alterar_imagem(Request $request, $id)
    {
        $dados = $request->all();

        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $dir = "img/clientes";
            $num = rand(1111,9999);
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Cliente::find($id)->update($dados);

        $clientes = Cliente::find($id);

        $clientes['acao'] = "3";

        return redirect()->route('clientes.editar',compact('clientes'))->withStatus('Foto do perfil atualizado com sucesso.');
    }

    /**
     * Altera o status do cliente the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function alterar_status(Request $request, $id)
    {
        $dados = $request->all();

        if($dados['status'] == 'Analisando'){
            $dados['status'] = 'Analisando';
        }elseif($dados['status'] == 'Bloqueado'){
            $dados['status'] = 'Bloqueado';
        }elseif($dados['status'] == 'Liberado'){
            $dados['status'] = 'Liberado';
        }

        Cliente::find($id)->update($dados);

        $clientes = Cliente::find($id);

        $clientes['acao'] = "3";

        return redirect()->route('clientes.editar',compact('clientes'))->withStatus('Status do perfil atualizado com sucesso.');
    }

}
