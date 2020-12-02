@extends('layout')

@section('title', $noticia->titulo)

@section('content')
<div class="container p-4">
    <div class="bg-white p-5 shadow rounded">
        <div class="row">
            <div class="col-lg-6">
                <h1>{{ $noticia->titulo }}</h1>
                <p class="text-secondary">{{ $noticia->descripcion }}</p>
                <p class="text-black-50">Publicada hace {{ $noticia->created_at->diffForHumans() }}</p>

                @auth
                <div class="btn-toolbar mb-2">
                    <a class="btn btn-secondary mr-2" href="{{ route('noticias.edit', $noticia) }}">
                        Editar
                    </a>
                    <a class="btn btn-danger mr-2" href="#" onclick="document.getElementById('delete-noticia').submit()">
                        Eliminar
                    </a>
                    <span>
                        <a class="btn btn-success mr-2" href='{{ route('picView', $noticia) }}'>Cambiar foto</a>
                        <input type="file" id="foto" accept="image/*" name="foto" value="{{ old('foto', $noticia->foto) }}"
                            class="@error('foto') is-invalid @enderror" />
                    </span>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <a class="btn btn-dark" href=" {{ route('noticias.index') }} ">
                        Regresar
                    </a>
                </div>
                <form id="delete-noticia" method="POST" class="d-none"
                    action="{{ route('noticias.destroy', $noticia) }}">
                    @csrf @method('DELETE')
                    <button>Eliminar</button>
                </form>
                @endauth
            </div>
            <div class="col-lg-6">
                <img src="{{asset('storage/' . $noticia->foto)}}" class="rounded float-right img-thumbnail"
                    alt="Responsive image" style="height: 200px; width= 400px;">
            </div>
        </div>
    </div>
</div>

@endsection