<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Http\Requests\SaveNoticiaRequest;
use App\Http\Requests\SaveFotoRequest;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view('noticias.index', [
            'noticias' => Noticia::latest()->paginate(3)
        ]);
    }

    public function show(Noticia $noticia) 
    {
        return view('noticias.show', [
            'noticia' => $noticia
        ]);
    }

    public function create()
    {
        return view('noticias.create', [
            'noticia' => new Noticia
        ]);
    }

    public function store(SaveNoticiaRequest $request)
    {
        $file = $request->file('foto');
        $originalname = $file->getClientOriginalName();
        Noticia::create([
            'foto' => $file->storeAs('fotos', $originalname, 'public') // AGREGA FOTO
        ] + $request->validated());
        return redirect()->route('noticias.index')->with('status', 'La noticia fue agregada con éxito');
    }

    public function edit(Noticia $noticia)
    {
        return view('noticias.edit', [
            'noticia' => $noticia
        ]);
    }

    public function picView(Noticia $noticia)
    {
        return view('noticias.picView', [
            'noticia' => $noticia
        ]);
    }

    public function update(Noticia $noticia, SaveNoticiaRequest $request)
    {
        $noticia->update($request->validated());

        return redirect()->route('noticias.show', $noticia)->with('status', 'La noticia fue actualizada con éxito');
    }

    public function updatePic(Noticia $noticia, SaveFotoRequest $request)
    {
        $file = $request->file('foto');
        $originalname = $file->getClientOriginalName();

        $noticia->update([
            'foto' => $file->storeAs('fotos', $originalname, 'public') // AGREGA FOTO
        ]);

        return redirect()->route('noticias.show', $noticia)->with('status', 'La foto fue actualizada con éxito');
    }

    public function destroy(Noticia $noticia)
    {
        Storage::delete($noticia->foto);
        $noticia->delete();
        return redirect()->route('noticias.index')->with('status', 'La noticia fue eliminada con exito');
    }
}
