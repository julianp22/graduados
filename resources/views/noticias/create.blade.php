@extends('layout')

@section('title', 'Registrar noticia')

@section('content')

<div class="container p-4">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">


            <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('noticias.store') }}"
                enctype="multipart/form-data" autocomplete="off">

                <h3 class="text-center">Registrar noticia</h1>
                    <hr>

                    @csrf
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input class="form-control border-0 bg-light shadow-sm @error('titulo') is-invalid @enderror" id="titulo"
                            type="text" placeholder="Título" name="titulo" value="{{ old('titulo', $noticia->titulo) }}"
                            onkeydown="return /[a-z, ]/i.test(event.key)" onblur="if (this.value == '') {this.value = '';}"
                            onfocus="if (this.value == '') {this.value = '';}">
                        @error('titulo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control border-0 bg-light shadow-sm @error('descripcion') is-invalid @enderror"  
                        name="descripcion" 
                        placeholder="Descripción"
                        rows="4">{{ old('descripcion', $noticia->descripcion) }}</textarea>
                        @error('descripcion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="foto">Foto: </label>
                        <input type="file" id="foto" accept="image/*" name="foto"
                            value="{{ old('foto', $noticia->foto) }}" class="@error('foto') is-invalid @enderror">
                        @error('foto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-lg btn-block">Registrar</button>
                    <a class="btn btn-link btn-block" href=" {{ route('noticias.index') }} ">
                        Cancelar
                    </a>
            </form>
        </div>
    </div>
</div>

@endsection