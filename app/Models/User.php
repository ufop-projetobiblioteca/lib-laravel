<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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
