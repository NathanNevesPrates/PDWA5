<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pudim;

class XmlController extends Controller
{
    public function gerarXML()
    {
        //SELECT * FROM table
        $dados = Pudim::all();
        return response()->view('data-xml', ['registros' => $dados])->header('Content-Type', 'application/xml');
    }
}
