<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Imovel extends Model
{
    protected $table = 'imoveis';

    protected $fillable = ['imobiliaria_id', 'codigo_ref', 'tipo_imovel', 'preco_imovel', 'preco_aluguel', 'quartos',
        'cozinhas', 'banheiros', 'garagem', 'pets', 'area_total', 'area_contruida', 'status', 'localizacao', 'n_imovel',
        'cidade', 'bairro', 'estado', 'descricao'];

    public function imobilaria(): BelongsTo
    {
        return $this->belongsTo(Imobiliaria::class, 'imobiliaria_id', 'id');
    }
}
