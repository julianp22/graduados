@extends('layout')

@section('title', 'Editar noticia')

@section('content')


    <div class="container p-4">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                <form class="bg-white py-3 px-4 shadow rounded" 
            method="POST" 
            action="{{ route('noticias.update', $noticia) }}"
            enctype="multipart/form-data">
                @method('PATCH')
                <h3 class="text-center">Editar noticia</h1>
                <hr>
                @include('noticias._form', ['btnText' => 'Actualizar'])
            </form>

            </div>
        </div>
    </div>

@endsection
