<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Imobiliaria extends Model
{
    protected $table = 'imobiliarias';
    protected $fillable = ['nome', 'descricao', 'cidade', 'estado', 'telefone', 'email'];

    public function imoveis(): HasMany
    {
        return $this->hasMany(Imovel::class, 'imobiliaria_id', 'id');
    }
}
