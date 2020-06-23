<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('preco');
            $table->integer('quantidade');
            $table->enum('unidade_medida',['g', 'un', 'kg'])->default('g');
            $table->enum('tipo',['Fruta', 'Verdura', 'Legumes', 'Folhas', 'Ervas'])->default('Fruta');
            $table->string('descricao');
            $table->enum('status',['Analisando', 'Liberado', 'Bloqueado'])->default('Analisando');
            $table->string('imagem');
            $table->integer('feirante_id')->unsigned();
            $table->foreign('feirante_id')->references('id')->on('feirantes')->onDelete('cascade');
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
        Schema::drop('produtos');
    }
}
