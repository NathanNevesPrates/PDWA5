<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pudim;

class CadastrarController extends Controller
{
    //Regra de Negocio: validar e persistir dados no banco
    public function salvar(Request $request)
    {
        $request->validate(
            [
                "tamanho" => "required|min:1|max:1",
                "sabor" => "required|min:3|max:64",
                "custo" => "required|min:1|max:64",
                "marca" => "required|min:3|max:64"
            ],
            [
                "tamanho.required" => "O campo 'Tamanho' deve ser preenchido",
                "tamanho.min" => "O campo 'Tamanho' deve ter no mínimo 1 caractere",
                "tamanho.max" => "O campo 'Tamanho' deve ter no máximo 1 caractere",

                "sabor.required" => "O campo 'Sabor' deve ser preenchido",
                "sabor.min" => "O campo 'Sabor' deve ter no mínimo 3 caracteres",
                "sabor.max" => "O campo 'Sabor' deve ter no máximo 64 caracteres",

                "custo.required" => "O campo 'Custo' deve ser preenchido",
                "custo.min" => "O campo 'Custo' deve ter no mínimo 3 caracteres",
                "custo.max" => "O campo 'Custo' deve ter no máximo 64 caracteres",

                "marca.required" => "O campo 'Marca' deve ser preenchido",
                "marca.min" => "O campo 'Marca' deve ter no mínimo 3 caracteres",
                "marca.max" => "O campo 'Marca' deve ter no máximo 64 caracteres"
            ]
        );

        $pudim = new Pudim();
        $pudim->fill($request->all());
        $pudim->save();

        // dd($request);
        return view('cadastrosalvo');
    }
}
