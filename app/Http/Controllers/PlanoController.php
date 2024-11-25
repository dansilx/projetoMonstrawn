<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use Illuminate\Http\Request;

class PlanoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planos = Plano::all();
        return view('plano.index', compact('planos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plano.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:500',
            'valor' => 'required|numeric|min:0',
            'duracao' => 'required|integer|min:1', // Duração em meses
        ]);

        Plano::create($validatedData);

        return redirect('/planos')->with('success', 'Plano cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plano $plano)
    {
        return view('plano.show', compact('plano'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plano $plano)
    {
        return view('plano.edit', compact('plano'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plano $plano)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:500',
            'valor' => 'required|numeric|min:0',
            'duracao' => 'required|integer|min:1',
        ]);

        $plano->update($validatedData);

        return redirect('/planos')->with('success', 'Plano atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plano $plano)
    {
        $plano->delete();

        return redirect('/planos')->with('success', 'Plano excluído com sucesso!');
    }
}
