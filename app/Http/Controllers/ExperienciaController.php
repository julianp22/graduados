<?php

namespace App\Http\Controllers;

use App\Models\Experiencia;
use App\Models\Graduado;
use App\Http\Requests\SaveExperienciaRequest;
use Cohensive\Embed\Facades\Embed;
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
            'experiencias' => Experiencia::latest()->paginate(),
            'graduados' => Graduado::all()
        ]);
    }

    public function show(Experiencia $experiencia) 
    {
        $graduado = Graduado::where('id', $experiencia->graduado_id)->get();
        return view('experiencias.show', [
            'experiencia' => $experiencia,
            'graduado' => $graduado
        ]);
    }

    public function create()
    {
        return view('experiencias.create', [
            'experiencia' => new Experiencia,
            'graduados' => Graduado::all()
        ]);
    }

    public function store(SaveExperienciaRequest $request)
    {
        $url = $request->input('url_video');
        $embed = Embed::make($url)->parseUrl();
        Experiencia::create([
            'url_video' => $embed->getHtml()
        ] + $request->validated());
        return redirect()->route('experiencias.index')->with('status', 'La experiencia fue agregada con éxito');
    }

    public function edit(Experiencia $experiencia)
    {
        return view('experiencias.edit', [
            'experiencia' => $experiencia,
            'graduados' => Graduado::all()
        ]);
    }

    public function update(Experiencia $experiencia, SaveExperienciaRequest $request)
    {
        $url = $request->input('url_video');
        $embed = Embed::make($url)->parseUrl();
        $experiencia->update([
            'url_video' => $embed->getHtml()
        ] + $request->validated());

        return redirect()->route('experiencias.show', $experiencia)->with('status', 'La experiencia fue actualizada con éxito');
    }

    public function destroy(Experiencia $experiencia)
    {
        $experiencia->delete();
        return redirect()->route('experiencias.index')->with('status', 'La experiencia fue eliminada con éxito');
    }
}
