<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view('experiencias.index', [
            'experiencias' => Experiencia::latest()->paginate()
        ]);
    }

    public function show(Experiencia $experiencia) 
    {
        return view('experiencias.show', [
            'experiencia' => $experiencia
        ]);
    }

    public function create()
    {
        return view('experiencias.create', [
            'experiencia' => new Experiencia
        ]);
    }

    public function store(SaveExperienciaRequest $request)
    {
        Experiencia::create($request->validated());
        return redirect()->route('experiencias.index')->with('status', 'La experiencia fue agregada con éxito');
    }

    public function edit(Experiencia $experiencia)
    {
        return view('experiencias.edit', [
            'experiencia' => $experiencia
        ]);
    }

    public function update(Experiencia $experiencia, SaveExperienciaRequest $request)
    {
        $experiencia->update($request->validated());

        return redirect()->route('experiencias.show', $experiencia)->with('status', 'La experiencia fue actualizada con éxito');
    }

    public function destroy(Experiencia $experiencia)
    {
        $experiencia->delete();
        return redirect()->route('experiencias.index')->with('status', 'La experiencia fue eliminada con éxito');
    }
}
