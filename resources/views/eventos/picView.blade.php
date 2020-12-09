@extends('layout')

@section('title', 'Cambiar foto')

@section('content')

    <div class="container py-4">
        <div class="text-center">
            <h3 class="display-6">Foto actual</h2>
                <img src="{{ asset('storage/' . $evento->foto) }}" class="rounded img-thumbnail" alt="Responsive image"
                    style="height: 240px; width: 600px;">
        </div>

        <div class="row py-4">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('updatePicEvent', $evento) }}"
                    enctype="multipart/form-data" autocomplete="off">

                    <h3 class="text-center">Cambiar foto</h3>
                    <hr>

                    @csrf
                    <div class="form-group">
                        <label for="foto">Foto: </label>
                        <input type="file" id="foto" accept="image/*" name="foto" value="{{ old('foto', $evento->foto) }}"
                            class="@error('foto') is-invalid @enderror">
                        @error('foto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-lg btn-block">Actualizar foto</button>
                    <a class="btn btn-link btn-block" href=" {{ route('eventos.index') }} ">
                        Cancelar
                    </a>
                </form>
            </div>
        </div>
    </div>

@endsection
