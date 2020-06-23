<?php

namespace App\Http\Controllers;

use App\Feirante;
use App\FormaPagamento;
use Illuminate\Http\Request;

use App\Http\Requests;

class FormaPagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$registros = OrdemServico::all()->where('usuario_id', $usuarioLogado);
        $formas_pagamento = FormaPagamento::all();
        $formas_pagamento = FormaPagamento::paginate(5);
        $feirantes = Feirante::all();

        return view('formas_pagamento.listar', compact('formas_pagamento','feirantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $feirantes = Feirante::all();
        return view('formas_pagamento.adicionar', compact('feirantes'));
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

        $insercao = FormaPagamento::create($dados);

        $formas_pagamento = FormaPagamento::find($insercao->id);
        $feirantes = Feirante::all();

        $formas_pagamento['acao'] = "2";

        return view('formas_pagamento.adicionar', compact('formas_pagamento','feirantes'))->withStatus('Forma de Pagamento adicionada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formas_pagamento = FormaPagamento::find($id);
        $feirantes = Feirante::all();

        $formas_pagamento['acao'] = "2";

        return view('formas_pagamento.adicionar', compact('formas_pagamento','feirantes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formas_pagamento = FormaPagamento::find($id);
        $feirantes = Feirante::all();
        $formas_pagamento['acao'] = "3";

        return view('formas_pagamento.adicionar', compact('formas_pagamento','feirantes'));
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

        FormaPagamento::find($id)->update($dados);

        $formas_pagamento = FormaPagamento::find($id);
        $feirantes = Feirante::all();
        $formas_pagamento['acao'] = "3";

        return redirect()->route('formas_pagamento.editar', compact('formas_pagamento','feirantes'))->withStatus('Forma de Pagamento atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FormaPagamento::find($id)->delete();
        $formas_pagamento = FormaPagamento::all();

        $formas_pagamento = FormaPagamento::paginate(4);
        return redirect()->route('formas_pagamento.listar', compact('formas_pagamento'))->withStatus('Forma de Pagamento excluida com sucesso.');
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

        FormaPagamento::find($id)->update($dados);

        $formas_pagamento = FormaPagamento::find($id);

        $formas_pagamento['acao'] = "3";

        return redirect()->route('formas_pagamento.editar',compact('formas_pagamento'))->withStatus('Foto da Forma de Pagamento atualizada com sucesso.');
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

        FormaPagamento::find($id)->update($dados);

        $formas_pagamento = FormaPagamento::find($id);

        $formas_pagamento['acao'] = "3";

        return redirect()->route('formas_pagamento.editar',compact('formas_pagamento'))->withStatus('Status da Forma de Pagamento atualizada com sucesso.');
    }
}
