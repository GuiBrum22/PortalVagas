<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Empresa extends Authenticatable
{
    use Notifiable;

    protected $fillable =[
        'nome_empresa', 'email', 'password', 'descricao_empresa'
    ];
    protected $hidden =[
        'password', 'remember_token',
    ];

    public function inscricoes(){
        return $this->hasMany(Inscricao::class);
    }

}
