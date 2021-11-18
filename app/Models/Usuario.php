<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // UMA instância de usuário -> possui N reservas
    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    // UMA instância de usuário -> possui N empréstimos
    public function emprestimos()
    {
        return $this->hasMany(Emprestimo::class);
    }

    // UMA instância de usuário -> pertence a UMA escola
    public function escola()
    {
        return $this->belongsTo(Escola::class);
    }
}
