<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Feirante;
use App\FormaPagamento;
use App\OrdemServico;
use App\Produto;
use Illuminate\Http\Request;

use App\Http\Requests;

class OrdemServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        $feirantes = Feirante::all();
        $clientes = Cliente::all();
        $formas_pagamento = FormaPagamento::all();
        $ordens = OrdemServico::paginate(4);

        for ($i=0; $i < count($ordens); $i++){
            $ordens[$i]->resumo_compra = json_decode( $ordens[$i]->resumo_compra, true);
        }

        return view('ordens.listar', compact('ordens','produtos', 'feirantes', 'clientes', 'formas_pagamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produtos = Produto::all();
        $feirantes = Feirante::all();
        $clientes = Cliente::all();
        $formas_pagamento = FormaPagamento::all();
        $validacao = rand(111111,999999);
        return view('ordens.adicionar', compact('produtos','feirantes', 'clientes', 'formas_pagamento', 'validacao'));
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

        $cliente = Cliente::find($dados['cliente_id']);
        $feirante = Feirante::find($dados['feirante_id']);
        $forma_pagamento = FormaPagamento::find($dados['forma_pagamento_id']);
        $produto = Produto::find($dados['produto_id']);
        $produto2 = Produto::find($dados['produto_id2']);
        $produto3 = Produto::find($dados['produto_id3']);

        if ($dados['endereco_aux']){
            $dados['endereco_destino'] = $dados['endereco_aux'];
        }else{
            $dados['endereco_destino'] = $cliente['endereco'];
        }

        $dados['endereco_origem'] = $feirante['endereco'];
        $dados['forma_pagamento'] = $forma_pagamento['id'];

        $dados['resumo_compra'] = array();

        array_push($dados['resumo_compra'], [$produto['id'], $dados['quantidade'], $produto['imagem']]);
        array_push($dados['resumo_compra'], [$produto2['id'], $dados['quantidade2'], $produto2['imagem']]);
        array_push($dados['resumo_compra'], [$produto3['id'], $dados['quantidade3'], $produto3['imagem']]);

        $dados['resumo_compra'] = json_encode( $dados['resumo_compra'], JSON_FORCE_OBJECT);

        $dados['valor_total'] = array();

        array_push($dados['valor_total'], [$produto['preco'], $dados['quantidade']]);
        array_push($dados['valor_total'], [$produto2['preco'], $dados['quantidade2']]);
        array_push($dados['valor_total'], [$produto3['preco'], $dados['quantidade3']]);

        $valor_total = 0;
        $subtotal = 0;

        for ($i=0; $i < count($dados['valor_total']); $i++) {
            $preco = $dados['valor_total'][$i][0];
            $quantidae = $dados['valor_total'][$i][1];

            $valor_compra = $preco * $quantidae;
            $subtotal = $subtotal + $valor_compra;
        }

        $dados['taxas'] = 3;
        if ($dados['taxas']){
            $valor_total = $subtotal + $dados['taxas'];
        }

        $dados['desconto'] = 5;
        if ($dados['desconto']){
            $valor_total = $valor_total - $dados['desconto'];
        }

        $dados['valor_total'] = $valor_total;
        $dados['subtotal'] = $subtotal;

        $dados['cliente_id'] = $cliente['id'];
        $dados['feirante_id'] = $feirante['id'];

        $dados['imagem_cliente'] = $cliente['imagem'];
        $dados['imagem_feirante'] = $feirante['imagem'];

        $dados['data_conclusao'] = '';
        $dados['comentario_cliente'] = '';
        $dados['comentario_feirante'] = '';
        $dados['avaliacao_cliente'] = '';
        $dados['avaliacao_feirante'] = '';
        $dados['status'] = 'Analisando';

        //dd($dados);

        $insercao = OrdemServico::create($dados);

        $ordens = OrdemServico::find($insercao->id);
        $produtos = Produto::all();
        $feirantes = Feirante::all();
        $clientes = Cliente::all();
        $formas_pagamento = FormaPagamento::all();

        $validacao = rand(111111,999999);

        $ordens['acao'] = "2";

        return view('ordens.adicionar', compact('ordens','produtos', 'feirantes', 'clientes', 'formas_pagamento', 'validacao'))->withStatus('Ordem adicionada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordens = OrdemServico::find($id);
        $produtos = Produto::all();
        $feirantes = Feirante::all();
        $clientes = Cliente::all();
        $formas_pagamento = FormaPagamento::all();

        $validacao = 0;
        $validacao = $ordens->validacao;

        $ordens['acao'] = "2";

        return view('ordens.adicionar', compact('ordens','produtos', 'feirantes', 'clientes', 'formas_pagamento', 'validacao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ordens = OrdemServico::find($id);
        $produtos = Produto::all();
        $feirantes = Feirante::all();
        $clientes = Cliente::all();
        $formas_pagamento = FormaPagamento::all();

        $validacao = 0;
        $validacao = $ordens->validacao;

        $ordens['acao'] = "3";

        return view('ordens.adicionar', compact('ordens','produtos', 'feirantes', 'clientes', 'formas_pagamento', 'validacao'));
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
            $dir = "img/produtos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$dados['nome'].".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }else{
            $dados['imagem'] = "img/sistema/sem_produto.png";
        }

        $insercao = OrdemServico::create($dados);

        $ordens = OrdemServico::find($insercao->id);
        $produtos = Produto::all();
        $feirantes = Feirante::all();
        $clientes = Cliente::all();
        $formas_pagamento = FormaPagamento::all();

        $ordens['acao'] = "3";

        return redirect()->route('ordens.editar', compact('ordens','produtos', 'feirantes', 'clientes', 'formas_pagamento'))->withStatus('Ordem atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OrdemServico::find($id)->delete();
        $ordens = OrdemServico::all();
        $produtos = Produto::all();
        $feirantes = Feirante::all();
        $clientes = Cliente::all();
        $formas_pagamento = FormaPagamento::all();

        $ordens = OrdemServico::paginate(5);
        return redirect()->route('ordens.listar', compact('ordens','produtos', 'feirantes', 'clientes', 'formas_pagamento'))->withStatus('Ordem excluida com sucesso.');
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

        OrdemServico::find($id)->update($dados);

        $ordens = OrdemServico::find($id);
        $produtos = Produto::all();
        $feirantes = Feirante::all();
        $clientes = Cliente::all();
        $formas_pagamento = FormaPagamento::all();

        $ordens['acao'] = "3";

        return redirect()->route('ordens.editar',compact('ordens','produtos', 'feirantes', 'clientes', 'formas_pagamento'))->withStatus('Status da Ordem atualizado com sucesso.');
    }
}
