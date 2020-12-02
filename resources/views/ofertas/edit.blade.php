@extends('layout')

@section('title', 'Editar oferta')

@section('content')


<div class="container p-4">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <form class="bg-white py-3 px-4 shadow rounded" method="POST"
                action="{{ route('ofertas.update', $oferta) }}" enctype="multipart/form-data" autocomplete="off">
                @method('PATCH')
                <h3 class="text-center">Editar oferta</h1>
                    <hr>
                    @include('ofertas._form', ['btnText' => 'Actualizar'])
            </form>

        </div>
    </div>
</div>

@endsection