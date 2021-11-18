<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'livro_id'];

    // UMA instância de reserva -> pertence a UM usuário
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
