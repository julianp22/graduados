@extends('layout')

@section('title', 'Agregar oferta')
    
@section('content')

    <div class="container p-4">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">


                <form class="bg-white py-3 px-4 shadow rounded" 
                    method="POST" 
                    action="{{ route('ofertas.store') }}"
                    enctype="multipart/form-data">

                    <h3 class="text-center">Agregar oferta</h1>
                    <hr>

                    @include('ofertas._form', ['btnText' => 'Agregar'])
                </form>
            </div>
        </div>
    </div>

@endsection