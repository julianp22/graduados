@extends('layout')

@section('title', 'Agregar experiencia')
    
@section('content')

    <div class="container p-4">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">


                <form class="bg-white py-3 px-4 shadow rounded" 
                    method="POST" 
                    action="{{ route('experiencias.store') }}"
                    enctype="multipart/form-data"
                    autocomplete="off">

                    <h3 class="text-center">Agregar experiencia</h1>
                    <hr>

                    @include('experiencias._form', ['btnText' => 'Agregar'])
                </form>
            </div>
        </div>
    </div>

@endsection