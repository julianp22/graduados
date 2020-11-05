@extends('layout')

@section('title', 'Editar producto')
    
@section('content')


<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <form class="bg-white py-3 px-4 shadow rounded" 
            method="POST" 
            action="{{ route('productos.update', $producto) }}"
            enctype="multipart/form-data">
                @method('PATCH')
                <h3 class="text-center">Editar producto</h1>
                <hr>
                @include('productos._form', ['btnText' => 'Actualizar'])
            </form>

        </div>
    </div>
</div>

@endsection