<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Professor;
use App\Models\Plano;
use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matriculas = Matricula::with(['aluno', 'professor', 'plano'])->get();
        return view('matriculas.index', compact('matriculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alunos = Aluno::all();
        $professors = Professor::all();
        $planos = Plano::all();
        return view('matriculas.create', compact('alunos', 'professors', 'planos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Matricula::create($request->all());

        return redirect('/matriculas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Matricula $matricula)
    {
        return view('matriculas.show', compact('matricula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matricula $matricula)
    {
        $alunos = Aluno::all();
        $professors = Professor::all();
        $planos = Plano::all();
        return view('matriculas.edit', compact('matricula', 'alunos', 'professors', 'planos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $matricula = Matricula::findOrFail($id);

        // $request->validate([
        //     'aluno_id' => 'required|exists:alunos,id',
        //     'professor_id' => 'required|exists:professors,id',
        //     'plano_id' => 'required|exists:planos,id',
        //     'data_matricula' => 'required|date',
        // ]);

        $matricula->update($request->all());

        return redirect('/matriculas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matricula $matricula)
    {
        $matricula->delete();

        return redirect()->route('matriculas.index');
    }
}
