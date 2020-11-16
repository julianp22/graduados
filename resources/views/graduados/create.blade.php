@extends('layout')

@section('title', 'Registrar graduado')
    
@section('content')

    <div class="container p-4">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">


                <form class="bg-white py-3 px-4 shadow rounded" 
                    method="POST" 
                    action="{{ route('graduados.store') }}"
                    enctype="multipart/form-data">

                    <h3 class="text-center">Registrar graduado</h1>
                    <hr>

                    @include('graduados._form', ['btnText' => 'Registrar'])
                </form>
            </div>
        </div>
    </div>

@endsection