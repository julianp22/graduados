<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use App\Http\Requests\SaveOfertaRequest;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view('ofertas.index', [
            'ofertas' => Oferta::latest()->paginate()
        ]);
    }

    public function show(Oferta $oferta) 
    {
        return view('ofertas.show', [
            'oferta' => $oferta
        ]);
    }

    public function create()
    {
        return view('ofertas.create', [
            'oferta' => new Oferta
        ]);
    }

    public function store(SaveOfertaRequest $request)
    {
        Oferta::create($request->validated());
        return redirect()->route('ofertas.index')->with('status', 'La oferta fue agregada con éxito');
    }

    public function edit(Oferta $oferta)
    {
        return view('ofertas.edit', [
            'oferta' => $oferta
        ]);
    }

    public function update(Oferta $oferta, SaveOfertaRequest $request)
    {
        $oferta->update($request->validated());

        return redirect()->route('ofertas.show', $oferta)->with('status', 'La oferta fue actualizada con éxito');
    }

    public function destroy(Oferta $oferta)
    {
        $oferta->delete();
        return redirect()->route('ofertas.index')->with('status', 'La oferta fue eliminada con éxito');
    }
}
