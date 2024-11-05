<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  
use App\Models\Aluno;

class DashboardController extends Controller
{
    public function gerarGrafico() 
    {
        $data = Aluno::select('professor_id', DB::raw('AVG(VALOR) AS valor_medio'))
                        ->with('aluno')
                        ->groupBy('professor_id')
                        ->get();

        $alunos = [];
        $valores_medios = [];

        foreach($datas as $linha)
        {
            $alunos[] = $linha->alunos->nome;
            $valores_medios[] = $linha->valor_medio;
        }

        return view('dashboard', compact('alunos', 'valores_medios'));

    }
}
