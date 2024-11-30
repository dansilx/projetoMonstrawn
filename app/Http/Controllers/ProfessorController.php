<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professors = Professor::all();
        return view('professors.index', compact('professors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('professors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Professor::create($request->all());

        return redirect('/professors');
    }

    /**
     * Display the specified resource.
     */
    public function show(Professor $professor)
    {
        return view('professors.show', compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professor $professor)
    {
        return view('professors.edit', compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $professor = Professor::findOrFail($id);

        $professor->update($request->all());

        return redirect("/professors");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professor $professor)
    {
        $professor->delete();

        return redirect()->route('professors.index')->with('success', 'Professor excluído com sucesso.');
    }
}
