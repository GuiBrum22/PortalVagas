<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;

    protected $fillable = [
        'localizacao',
        'descricao',
        'salario',
        'empresa_id'
    ];

    public function inscricoes(){
        return $this->hasMany(Inscricao::class);
    }

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }

}
