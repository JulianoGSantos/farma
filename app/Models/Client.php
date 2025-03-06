<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

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
