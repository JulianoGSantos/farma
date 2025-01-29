<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'company',
        'cnpj',
        'responsible',
        'cellphone',
        'cellphone2',
        'email',
        'cep',
        'street',
        'number',
        'complement',
        'city',
        'state',
    ];
}
