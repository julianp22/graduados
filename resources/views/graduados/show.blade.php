@extends('layout')

@section('title', $producto->nombre)

@section('content')
    <div class="container">
        <div class="bg-white p-5 shadow rounded">
            <h1>{{ $producto->nombre }}</h1>
            <p class="text-secondary">{{ $producto->descripcion }}</p>
            <p class="text-black-50">{{ $producto->created_at->diffForHumans() }}</p>
            
            <div class="d-flex justify-content-between align-items-center">
                <a href=" {{ route('productos.index') }} ">
                    Regresar
                </a>
            </div>

            @auth
            <div class="btn-group btn-group-sm">
                <a class="btn btn-primary" href="{{ route('productos.edit', $producto) }}">
                    Editar
                </a>
                <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-producto').submit()">
                    Eliminar
                </a>
            </div>
                <form id="delete-producto" method="POST" 
                    class="d-none"
                    action="{{ route('productos.destroy', $producto) }}">
                    @csrf @method('DELETE')
                    <button>Eliminar</button>
                </form>
            @endauth
        </div>
    </div>
@endsection
    
