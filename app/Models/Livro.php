<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['codigo', 'titulo', 'autor', 'edicao', 'isbn', 'emprestado', 'reservado'];

    // UMA instância de livro -> pertence a UMA escola
    public function escola()
    {
        return $this->belongsTo(Escola::class);
    }

    // UMA instância de livro -> pertence a UM empréstimo
    public function emprestimo()
    {
        return $this->belongsTo(Emprestimo::class);
    }

    // UMA instância de livro -> pertence a UMA reserva
    public function reserva()
    {
        return $this->belongsTo(Reserva::class);
    }
}
