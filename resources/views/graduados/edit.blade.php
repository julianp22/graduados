@extends('layout')

@section('title', 'Editar graduado')

@section('content')


    <div class="container p-4">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                <form class="bg-white py-3 px-4 shadow rounded" 
            method="POST" 
            action="{{ route('graduados.update', $graduado) }}"
            enctype="multipart/form-data">
                @method('PATCH')
                <h3 class="text-center">Editar graduado</h1>
                <hr>
                @include('graduados._form', ['btnText' => 'Actualizar'])
            </form>

            </div>
        </div>
    </div>

@endsection
