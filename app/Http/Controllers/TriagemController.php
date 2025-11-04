<?php

namespace App\Http\Controllers;

use App\Services\BFSService;
use Illuminate\Http\Request;

class TriagemController extends Controller
{
    //

     public function triagemAutomatica(Request $request, BFSService $bfs)
    {
        $categoria = $request->input('categoria');
        $gravidade = $request->input('gravidade');

        $departamento = $bfs->buscarDepartamentoInteligente($categoria, $gravidade);

        return response()->json([
            'categoria' => $categoria,
            'gravidade' => $gravidade,
            'departamento' => $departamento
        ]);
    }
}
