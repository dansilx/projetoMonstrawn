<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Matricula;

class DashboardController extends Controller
{
    public function gerarGrafico()
    {
        $data = Matricula::select('aluno_id', DB::raw('AVG(valor) AS valor_medio'))
                        ->with('aluno')
                        ->groupBy('aluno_id')
                        ->get();

        $matriculas = [];
        $valores_medios = [];

        foreach($data as $linha)
        {
            $matriculas[] = $linha->aluno->nome;
            $valores_medios[] = $linha->valor_medio;

        }

        //return view('dashboard', compact('alunos', 'valores_medios'));
        return view('dashboard', compact('matriculas', 'valores_medios'));

    }
}
