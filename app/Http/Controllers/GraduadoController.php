<?php

namespace App\Http\Controllers;

use App\Models\Graduado;
use App\Http\Requests\SaveGraduadoRequest;
use Illuminate\Http\Request;

class GraduadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view('graduados.index', [
            'graduados' => Graduado::latest()->paginate()
        ]);
    }

    public function show(Graduado $graduado) 
    {
        return view('graduados.show', [
            'graduado' => $graduado
        ]);
    }

    public function create()
    {
        return view('graduados.create', [
            'graduado' => new Graduado
        ]);
    }

    public function store(SaveGraduadoRequest $request)
    {
        $file = $request->file('foto');
        $originalname = $file->getClientOriginalName();
        Graduado::create([
            'foto' => $file->storeAs('fotos', $originalname, 'public') // AGREGA FOTO
        ] + $request->validated());
        return redirect()->route('graduados.index')->with('status', 'El graduado fue agregado con exito');
    }

    public function edit(Graduado $graduado)
    {
        return view('graduados.edit', [
            'graduado' => $graduado
        ]);
    }

    public function picView(Graduado $graduado)
    {
        return view('graduados.picView', [
            'graduado' => $graduado
        ]);
    }

    public function update(Graduado $graduado, SaveGraduadoRequest $request)
    {
        /*$file = $request->file('foto');
        $originalname = $file->getClientOriginalName();

        $graduado->update([
            'foto' => $file->storeAs('fotos', $originalname, 'public') // AGREGA FOTO
        ] + $request->validated());*/

        $graduado->update($request->validated());

        return redirect()->route('graduados.show', $graduado)->with('status', 'El graduado fue actualizado con exito');
    }

    public function updatePic($id, SaveGraduadoRequest $request)
    {
        $graduado->update($request->validated());

        return redirect()->route('graduados.show', $graduado)->with('status', 'El graduado fue actualizado con exito');
    }

    /*public function updatePic(Graduado $graduado)
    {
        if ($request->hasFile('foto')) {

            $imagePath = public_path('storage/'.$request->foto);
            if(Storage::disk('public')->exists($imagePath)){
                Storage::delete($producto->foto);
            }
            $file = $request->file('foto');
            $originalname = $file->getClientOriginalName();
            $image = $file->storeAs('fotos', $originalname, 'public');
            //$data['foto'] = $image;
            //$post->update($data);
        }
    }*/

    public function destroy(Graduado $graduado)
    {
        Storage::delete($graduado->foto);
        $graduado->delete();
        return redirect()->route('graduados.index')->with('status', 'El graduado fue eliminado con exito');
    }
}
