<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class FormaPagamento extends Model
{
    /**
     * Automatically persist the model in the Firebase realtime
     * database, whenever it gets created/updated/deleted
     */
    use SyncsWithFirebase;

    protected $fillable = [
        'id','nome','descricao','status','feirante_id'
    ];

    protected $table = 'forma_pagamentos';

    public function feirante() {
        return $this->belongsTo(Feirante::class, 'id');
    }
}
