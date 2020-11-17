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

    public function update(Graduado $graduado, Request $request)
    {
        /*$file = $request->file('foto');
        $originalname = $file->getClientOriginalName();

        $graduado->update([
            'foto' => $file->storeAs('fotos', $originalname, 'public') // AGREGA FOTO
        ] + $request->validated());*/

        //$graduado->update($request->validated());

        $this->validate($request,[ 
            'nombre' => 'required', 
            'cedula' => 'required', 
            'fecha_grado' => 'required', 
            'email' => 'required', 
            'num_celular' => 'required', 
            'pais_residencia' => 'required'
        ]);

        $data = Graduado::find($graduado->id);
        $data->nombre = $request->nombre;
        $data->cedula = $request->cedula;
        $data->fecha_grado = $request->fecha_grado;
        $data->email = $request->email;
        $data->num_celular = $request->num_celular;
        $data->pais_residencia = $request->pais_residencia;
        $data->save();

        return redirect()->route('graduados.show', $graduado)->with('status', 'El graduado fue actualizado con exito');
    }

    public function updatePic($id, Request $request)
    {
        $this->validate($request, [ 
            'pais_residencia' => 'required|mimes:jpeg,png,bmp,tiff|max:4096'
        ]);

        $file = $request->file('foto');
        $originalname = $file->getClientOriginalName();

        Graduado::where('id', $id)->update([
            'foto' => $file->storeAs('fotos', $originalname, 'public') // AGREGA FOTO
        ] + $request->validated());

        return redirect()->back()->with('status', 'La foto fue actualizada con éxito');
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
