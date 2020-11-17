@extends('layout')

@section('title', $graduado->nombre)

@section('content')
<div class="container p-4">
    <div class="bg-white p-5 shadow rounded">
        <div class="row">
            <div class="col-lg-6">
                <h1>{{ $graduado->nombre }}</h1>
                <p class="text-secondary">{{ $graduado->descripcion }}</p>
                <p class="text-black-50">Agregado {{ $graduado->created_at->diffForHumans() }}</p>

                @auth
                <div class="btn-toolbar mb-2">
                    <a class="btn btn-secondary mr-2" href="{{ route('graduados.edit', $graduado) }}">
                        Editar
                    </a>
                    <a class="btn btn-danger mr-2" href="#" onclick="document.getElementById('delete-graduado').submit()">
                        Eliminar
                    </a>
                    <span>
                        <a class="btn btn-success mr-2" href='{{ route('picView', $graduado) }}'>Cambiar foto</a>
                        <input type="file" id="foto" accept="image/*" name="foto" value="{{ old('foto', $graduado->foto) }}"
                            class="@error('foto') is-invalid @enderror" />
                    </span>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <a class="btn btn-dark" href=" {{ route('graduados.index') }} ">
                        Regresar
                    </a>
                </div>
                <form id="delete-graduado" method="POST" class="d-none"
                    action="{{ route('graduados.destroy', $graduado) }}">
                    @csrf @method('DELETE')
                    <button>Eliminar</button>
                </form>
                @endauth
            </div>
            <div class="col-lg-6">
                <img src="{{asset('storage/' . $graduado->foto)}}" class="rounded float-right img-thumbnail"
                    alt="Responsive image" style="height: 400px; width= 400px;">
            </div>
        </div>
    </div>
</div>

@endsection