<?php

namespace App\Http\Controllers;

use App\Feirante;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;

class FeiranteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feirantes = Feirante::all();

        $feirantes = Feirante::paginate(4);
        return view('feirantes.listar', compact('feirantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feirantes.adicionar');
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
            $dir = "img/feirantes";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$dados['nome'].".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }else{
            $dados['imagem'] = "img/sistema/sem_profile.png";
        }

        $dados['senha'] = Hash::make('123456');

        $insercao = Feirante::create($dados);

        $feirantes = Feirante::find($insercao->id);

        $feirantes['acao'] = "2";

        return view('feirantes.adicionar', compact('feirantes'))->withStatus('Perfil adicionado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feirantes = Feirante::find($id);

        $feirantes['acao'] = "2";

        return view('feirantes.adicionar', compact('feirantes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feirantes = Feirante::find($id);

        $feirantes['acao'] = "3";

        return view('feirantes.adicionar', compact('feirantes'));
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
            $dir = "img/feirantes";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$dados['nome'].".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Feirante::find($id)->update($dados);

        $feirantes = Feirante::find($id);

        $feirantes['acao'] = "3";

        return redirect()->route('feirantes.editar', compact('feirantes'))->withStatus('Perfil atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Feirante::find($id)->delete();
        $feirantes = Feirante::all();

        $feirantes = Feirante::paginate(4);
        return redirect()->route('feirantes.listar', compact('feirantes'))->withStatus('Feirante excluido com sucesso.');
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
            $dir = "img/feirantes";
            $num = rand(1111,9999);
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Feirante::find($id)->update($dados);

        $feirantes = Feirante::find($id);

        $feirantes['acao'] = "3";

        return redirect()->route('feirantes.editar',compact('feirantes'))->withStatus('Foto do perfil atualizado com sucesso.');
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

        Feirante::find($id)->update($dados);

        $feirantes = Feirante::find($id);

        $feirantes['acao'] = "3";

        return redirect()->route('feirantes.editar',compact('feirantes'))->withStatus('Status do perfil atualizado com sucesso.');
    }
}
