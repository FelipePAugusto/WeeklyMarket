<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Cliente extends Model
{
    /**
     * Automatically persist the model in the Firebase realtime
     * database, whenever it gets created/updated/deleted
     */
    use SyncsWithFirebase;

    protected $fillable = [
        'id','nome','email','cpf','senha','status','endereco','celular','imagem'
    ];

    protected $table = 'clientes';
}
