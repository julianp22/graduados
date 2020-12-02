<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Http\Requests\SaveEventoRequest;
use App\Http\Requests\SaveFotoRequest;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view('eventos.index', [
            'eventos' => Evento::latest()->paginate(3)
        ]);
    }

    public function show(Evento $evento) 
    {
        return view('eventos.show', [
            'evento' => $evento
        ]);
    }

    public function create()
    {
        return view('eventos.create', [
            'evento' => new Evento
        ]);
    }

    public function store(SaveEventoRequest $request)
    {
        $file = $request->file('foto');
        $originalname = $file->getClientOriginalName();
        Evento::create([
            'foto' => $file->storeAs('fotos', $originalname, 'public') // AGREGA FOTO
        ] + $request->validated());
        return redirect()->route('eventos.index')->with('status', 'El evento fue agregado con éxito');
    }

    public function edit(Evento $evento)
    {
        return view('eventos.edit', [
            'evento' => $evento
        ]);
    }

    public function picView(Evento $evento)
    {
        return view('eventos.picView', [
            'evento' => $evento
        ]);
    }

    public function update(Evento $evento, SaveEventoRequest $request)
    {
        $evento->update($request->validated());

        return redirect()->route('eventos.show', $evento)->with('status', 'El evento fue actualizado con éxito');
    }

    public function updatePic(Evento $evento, SaveFotoRequest $request)
    {
        $file = $request->file('foto');
        $originalname = $file->getClientOriginalName();

        $evento->update([
            'foto' => $file->storeAs('fotos', $originalname, 'public') // AGREGA FOTO
        ]);

        return redirect()->route('eventos.show', $evento)->with('status', 'La foto fue actualizada con éxito');
    }

    public function destroy(Evento $evento)
    {
        Storage::delete($evento->foto);
        $evento->delete();
        return redirect()->route('eventos.index')->with('status', 'El evento fue eliminado con éxito');
    }
}
