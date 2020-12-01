@extends('layout')

@section('title', $oferta->nombre)

@section('content')
<div class="container p-4">
    <div class="bg-white p-5 shadow rounded">
        <div class="row">
            <div class="col-lg-6">
                <h1>{{ $oferta->cargo }}</h1>
                <h2>Empresa: {{ $oferta->empresa }}</h2>
                <h2>Salario: ${{ $oferta->salario }}</h2>
                <p class="text-secondary">{{ $oferta->descripcion }}</p>
                <p class="text-black-50">Agregado hace {{ $oferta->created_at->diffForHumans() }}</p>

                @auth
                <div class="btn-toolbar mb-2">
                    <a class="btn btn-secondary mr-2" href="{{ route('ofertas.edit', $oferta) }}">
                        Editar
                    </a>
                    <a class="btn btn-danger mr-2" href="#" onclick="document.getElementById('delete-oferta').submit()">
                        Eliminar
                    </a>
                    <a class="btn btn-success" href="{{ $oferta->url }}" target="_blank">
                        Ir a la oferta
                    </a>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-2">
                    <a class="btn btn-dark" href=" {{ route('ofertas.index') }} ">
                        Regresar
                    </a>
                </div>
                <form id="delete-oferta" method="POST" class="d-none"
                    action="{{ route('ofertas.destroy', $oferta) }}">
                    @csrf @method('DELETE')
                    <button>Eliminar</button>
                </form>
                @endauth

            </div>
        </div>
    </div>
</div>

@endsection