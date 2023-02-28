<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use Illuminate\Http\Request;

class ImovelController extends Controller
{
    public function index()
    {
        $imoveis = Imovel::all();

        return response()->json(['imoveis' => $imoveis]);

    }

    public function store(Request $request)
    {
        $data = [
            'imobiliaria_id' => $request->input('imobiliaria_id'),
            'codigo_ref' => $request->input('codigo_ref'),
            'tipo_imovel' => $request->input('tipo_imovel'),
            'preco_imovel' => $request->input('preco_imovel'),
            'preco_aluguel' => $request->input('preco_aluguel'),
            'quartos' => $request->input('quartos'),
            'cozinhas' => $request->input('cozinhas'),
            'banheiros' => $request->input('banheiros'),
            'garagem' => $request->input('garagem'),
            'pets' => $request->input('pets'),
            'area_total' => $request->input('area_total'),
            'area_contruida' => $request->input('area_contruida'),
            'status' => $request->input('status'),
            'localizacao' => $request->input('localizacao'),
            'n_imovel' => $request->input('n_imovel'),
            'cidade' => $request->input('cidade'),
            'bairro' => $request->input('bairro'),
            'estado' => $request->input('estado'),
            'descricao' => $request->input('descricao')
            ];

        Imovel::create($data);

        return response()->json(['message' => 'registro criado com sucesso'], 201);

    }

    public function show($id)
    {
        $imovel = Imovel::find($id);

        return response()->json(['message' => 'registro criado com sucesso'], 201);
    }

    public function update(Request $request, $id)
    {
        $imovel = Imovel::find($id);

        $data = [
            'imobiliaria_id' => $request->input('imobiliaria_id') ?? $imovel->imobiliaria_id,
            'codigo_ref' => $request->input('codigo_ref') ?? $imovel->codigo_ref,
            'tipo_imovel' => $request->input('tipo_imovel') ?? $imovel->tipo_imovel,
            'preco_imovel' => $request->input('preco_imovel') ?? $imovel->preco_imovel,
            'preco_aluguel' => $request->input('preco_aluguel') ?? $imovel->preco_aluguel,
            'quartos' => $request->input('quartos') ?? $imovel->quartos,
            'cozinhas' => $request->input('cozinhas') ?? $imovel->cozinhas,
            'banheiros' => $request->input('banheiros') ?? $imovel->banheiros,
            'garagem' => $request->input('garagem') ?? $imovel->garagem,
            'pets' => $request->input('pets') ?? $imovel->pets,
            'area_total' => $request->input('area_total') ?? $imovel->area_total,
            'area_contruida' => $request->input('area_contruida') ?? $imovel->area_contruida,
            'status' => $request->input('status') ?? $imovel->status,
            'localizacao' => $request->input('localizacao') ?? $imovel->localizacao,
            'n_imovel' => $request->input('n_imovel') ?? $imovel->n_imovel,
            'cidade' => $request->input('cidade') ?? $imovel->cidade,
            'bairro' => $request->input('bairro') ?? $imovel->bairro,
            'estado' => $request->input('estado') ?? $imovel->estado,
            'descricao' => $request->input('descricao') ?? $imovel->descricao
        ];

        Imovel::update($data);

        return response()->json(['message' => 'registro atualizado com sucesso']);
    }

    public function destroy($id)
    {
        Imovel::destroy($id);

        return response()->json(['message' => 'registro deletado'], 204);
    }
}
