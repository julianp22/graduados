@extends('layout')

@section('title', $evento->titulo)

@section('content')
<div class="container p-4">
    <div class="bg-white p-5 shadow rounded">
        <div class="row">
            <div class="col-lg-6">
                <h1>{{ $evento->titulo }}</h1>
                <p class="text-secondary">{{ $evento->descripcion }}</p>
                <p class="text-black-50">Publicado hace {{ $evento->created_at->diffForHumans() }}</p>

                @auth
                <div class="btn-toolbar mb-2">
                    <a class="btn btn-secondary mr-2" href="{{ route('eventos.edit', $evento) }}">
                        Editar
                    </a>
                    <a class="btn btn-danger mr-2" href="#" onclick="document.getElementById('delete-evento').submit()">
                        Eliminar
                    </a>
                    <span>
                        <a class="btn btn-success mr-2" href='{{ route('picView', $evento) }}'>Cambiar foto</a>
                        <input type="file" id="foto" accept="image/*" name="foto" value="{{ old('foto', $evento->foto) }}"
                            class="@error('foto') is-invalid @enderror" />
                    </span>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <a class="btn btn-dark" href=" {{ route('eventos.index') }} ">
                        Regresar
                    </a>
                </div>
                <form id="delete-evento" method="POST" class="d-none"
                    action="{{ route('eventos.destroy', $evento) }}">
                    @csrf @method('DELETE')
                    <button>Eliminar</button>
                </form>
                @endauth
            </div>
            <div class="col-lg-6">
                <img src="{{asset('storage/' . $evento->foto)}}" class="rounded float-right img-thumbnail"
                    alt="Responsive image" style="height: 200px; width= 400px;">
            </div>
        </div>
    </div>
</div>

@endsection