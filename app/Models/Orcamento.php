<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Municipio;
use App\Models\Uf;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;

    protected $fillable = [


        'tipo_evento', 'data_inicio', 'endereco', 'status', 'data_fim', 'id_municipio', 'id_uf', 'id_user', 'id_cliente', 'produtos'



    ];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'id_municipio');
    }

    public function uf()
    {
        return $this->belongsTo(Uf::class, 'id_uf');
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

}
