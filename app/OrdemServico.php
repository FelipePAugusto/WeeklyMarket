<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class OrdemServico extends Model
{
    /**
     * Automatically persist the model in the Firebase realtime
     * database, whenever it gets created/updated/deleted
     */
    use SyncsWithFirebase;

    protected $fillable = [
        'id','cliente_id','feirante_id','endereco_origem','endereco_destino','forma_pagamento','resumo_compra','validacao','endereco_aux','subtotal','valor_total','desconto','taxas','status','data_conclusao','comentario_cliente','comentario_feirante','avaliacao_cliente','avaliacao_feirante','imagem_cliente','imagem_feirante'
    ];

    protected $table = 'ordem_servicos';
}
