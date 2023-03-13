<?php

namespace App\Http\Controllers;

use App\Models\Imobiliaria;
use Illuminate\Http\Request;

class ImobiliariaController extends Controller
{
    public function index()
    {
        $imobiliarias = Imobiliaria::all();

        return response()->json(['imobiliarias' => $imobiliarias]);
    }

    public function store(Request $request)
    {
        $data = ['nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'cidade' => $request->input('cidade'),
            'estado' => $request->input('estado'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
        ];

        Imobiliaria::create($data);

        return response()->json(['message' => 'registro criado com sucesso'], 201);
    }

    public function show($id)
    {
        $imobiliaria = Imobiliaria::find($id);

        return response()->json(['imobiliaria' => $imobiliaria]);
    }

    public function update(Request $request, $id)
    {
        $imobiliaria = Imobiliaria::find($id);

        $data = ['nome' => $request->input('nome') ?? $imobiliaria->nome,
            'descricao' => $request->input('descricao') ?? $imobiliaria->descricao,
            'cidade' => $request->input('cidade') ?? $imobiliaria->cidade,
            'estado' => $request->input('estado') ?? $imobiliaria->estado,
            'telefone' => $request->input('telefone') ?? $imobiliaria->telefone,
            'email' => $request->input('email') ?? $imobiliaria->email,
        ];

        Imobiliaria::update($data);

        return response()->json(['message' => 'registro atualizado com sucesso']);
    }

    public function destroy($id)
    {
        Imobiliaria::destroy($id);

        return response()->json(['message' => 'registro deletado'], 204);
    }
}
