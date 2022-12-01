<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;

    protected $fillable = [


        'tipo_evento', 'data_inicio', 'endereco', 'status', 'data_fim', 'id_municipio', 'id_uf', 'id_user', 'id_produto', 'id_cliente', 'produtos'



    ];

    public function municipio()
    {
        return $this->belongsTo(municipio::class, 'id_municipio');
    }

    public function uf()
    {
        return $this->belongsTo(uf::class, 'id_uf');
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function produto()
    {
        return $this->belongsTo(User::class, 'id_produto');
    }

    public function cliente()
    {
        return $this->belongsTo(User::class, 'id_cliente');
    }

}
