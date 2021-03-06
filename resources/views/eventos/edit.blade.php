@extends('layout')

@section('title', 'Editar evento')

@section('content')


    <div class="container p-4">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                <form class="bg-white py-3 px-4 shadow rounded" 
            method="POST" 
            action="{{ route('eventos.update', $evento) }}"
            enctype="multipart/form-data">
                @method('PATCH')
                <h3 class="text-center">Editar evento</h1>
                <hr>
                @include('eventos._form', ['btnText' => 'Actualizar'])
            </form>

            </div>
        </div>
    </div>

@endsection
