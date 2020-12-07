@extends('layout')

@section('title', $graduado[0]->nombre)

@section('content')
<div class="container p-4">
    <div class="bg-white p-5 shadow rounded">
        <div class="row">
            <div class="col-lg-6">
                <h1>Graduado: {{ $graduado[0]->nombre }}</h1>
                <p class="text-secondary">{{ $experiencia->descripcion }}</p>
                <div class="embed-responsive embed-responsive-16by9">
                    {!! $experiencia->url_video !!}
                </div>
                <p class="text-black-50">Agregado hace {{ $experiencia->created_at->diffForHumans() }}</p>

                @auth
                <div class="btn-toolbar mb-2">
                    <a class="btn btn-secondary mr-2" href="{{ route('experiencias.edit', $experiencia, $graduado) }}">
                        Editar
                    </a>
                    <a class="btn btn-danger mr-2" href="#"
                        onclick="document.getElementById('delete-experiencia').submit()">
                        Eliminar
                    </a>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-2">
                    <a class="btn btn-dark" href=" {{ route('experiencias.index') }} ">
                        Regresar
                    </a>
                </div>
                <form id="delete-experiencia" method="POST" class="d-none"
                    action="{{ route('experiencias.destroy', $experiencia) }}">
                    @csrf @method('DELETE')
                    <button>Eliminar</button>
                </form>
                @endauth

            </div>
        </div>
    </div>
</div>

@endsection