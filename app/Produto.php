<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Produto extends Model
{
    /**
     * Automatically persist the model in the Firebase realtime
     * database, whenever it gets created/updated/deleted
     */
    use SyncsWithFirebase;

    protected $fillable = [
        'id','nome','preco','quantidade','unidade_medida','tipo','descricao','status','imagem','feirante_id'
    ];

    protected $table = 'produtos';

    public function feirante() {
        return $this->belongsTo(Feirante::class, 'id');
    }
}
