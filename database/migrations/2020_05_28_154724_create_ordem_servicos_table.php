<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdemServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordem_servicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id');
            $table->integer('feirante_id');
            $table->string('endereco_origem');
            $table->string('endereco_destino');
            $table->string('forma_pagamento');
            $table->string('resumo_compra');
            $table->string('validacao');
            $table->string('endereco_aux');
            $table->string('subtotal');
            $table->string('valor_total');
            $table->string('desconto');
            $table->string('taxas');
            $table->enum('status',['Preparação','Transporte','Entregue','Analisando','Cancelada'])->default('Analisando');
            $table->string('data_conclusao');
            $table->string('comentario_cliente');
            $table->string('comentario_feirante');
            $table->string('avaliacao_cliente');
            $table->string('avaliacao_feirante');
            $table->string('imagem_cliente');
            $table->string('imagem_feirante');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ordem_servicos');
    }
}
