<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;

    protected $fillable = [


        'tipo_evento', 'data_inicio', 'endereco', 'status', 'data_fim', 'id_municipio', 'id_uf', 'id_cliente', 'id_user', 'data_registro'



    ];

    public function municipio()
    {
        return $this->belongsTo(municipio::class, 'id_municipio');
    }

    public function uf()
    {
        return $this->belongsTo(uf::class, 'id_uf');
    }

    public function cliente()
    {
        return $this->belongsTo(cliente::class, 'id_cliente');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}
