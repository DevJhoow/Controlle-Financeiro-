<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lancamento extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'user_id',
        'descricao',
        'valor',
        'tipo',
        'data',
    ];

    // Relacionamento: um lançamento pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
