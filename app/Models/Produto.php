<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao','produto_info', 'tipo', 'quantidade_estoque', 'foto', 'id_user'];


    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
