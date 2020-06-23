<?php

namespace App\Http\Controllers;

use App\Feirante;
use App\Produto;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        $produtos = Produto::paginate(4);
        $feirantes = Feirante::all();

        return view('produtos.listar', compact('produtos','feirantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $feirantes = Feirante::all();
        return view('produtos.adicionar', compact('feirantes'));
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

        if($dados['unidade_medida'] == 'g'){
            $dados['unidade_medida'] = 'g';
        }elseif($dados['unidade_medida'] == 'un'){
            $dados['unidade_medida'] = 'un';
        }elseif($dados['unidade_medida'] == 'kg'){
            $dados['unidade_medida'] = 'kg';
        }

        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $dir = "img/produtos";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$dados['nome'].".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }else{
            $dados['imagem'] = "img/sistema/sem_produto.png";
        }

        $insercao = Produto::create($dados);

        $produtos = Produto::find($insercao->id);
        $feirantes = Feirante::all();

        $produtos['acao'] = "2";

        return view('produtos.adicionar', compact('produtos','feirantes'))->withStatus('Produto adicionado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produtos = Produto::find($id);
        $feirantes = Feirante::all();

        $produtos['acao'] = "2";

        return view('produtos.adicionar', compact('produtos','feirantes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produtos = Produto::find($id);
        $feirantes = Feirante::all();
        $produtos['acao'] = "3";

        return view('produtos.adicionar', compact('produtos','feirantes'));
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

        if($dados['unidade_medida'] == 'g'){
            $dados['unidade_medida'] = 'g';
        }elseif($dados['unidade_medida'] == 'un'){
            $dados['unidade_medida'] = 'un';
        }elseif($dados['unidade_medida'] == 'kg'){
            $dados['unidade_medida'] = 'kg';
        }

        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $dir = "img/produtos";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$dados['nome'].".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Produto::find($id)->update($dados);

        $produtos = Produto::find($id);
        $feirantes = Feirante::all();
        $produtos['acao'] = "3";

        return redirect()->route('produtos.editar', compact('produtos','feirantes'))->withStatus('Produto atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produto::find($id)->delete();
        $produtos = Produto::all();

        $produtos = Produto::paginate(4);
        return redirect()->route('produtos.listar', compact('produtos'))->withStatus('Produto excluido com sucesso.');
    }

    /**
     * Altera a imagem do produto the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function alterar_imagem(Request $request, $id)
    {
        $dados = $request->all();

        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $dir = "img/produtos";
            $num = rand(1111,9999);
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Produto::find($id)->update($dados);

        $produtos = Produto::find($id);

        $produtos['acao'] = "3";

        return redirect()->route('produtos.editar',compact('produtos'))->withStatus('Foto do Produto atualizado com sucesso.');
    }

    /**
     * Altera o status do produto the specified resource from storage.
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

        Produto::find($id)->update($dados);

        $produtos = Produto::find($id);

        $produtos['acao'] = "3";

        return redirect()->route('produtos.editar',compact('produtos'))->withStatus('Status do Produto atualizado com sucesso.');
    }
}
