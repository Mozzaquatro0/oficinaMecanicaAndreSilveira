<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $table = 'servico';

    protected $fillable =
    [
        'servico',
        'valor',
        'data_servico',
        'id_cliente',
    ];
    public function clientes()
    {
        return $this->belongsTo(Cliente::class);
    }
}
