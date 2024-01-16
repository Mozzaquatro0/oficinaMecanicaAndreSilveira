<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'nome',
        'telefone',
        'carro',
        'placa',
    ];

   public function servicos()
   {
    return $this->hasMany('App\Models\Servico');
   }
}
