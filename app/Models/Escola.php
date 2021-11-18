<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'user_id', 'livro_id'];

    // UMA instância de escola -> possui N livros
    public function livros()
    {
        return $this->hasMany(Livro::class);
    }

    // UMA instância de escola -> possui N usuarios
    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }
}
