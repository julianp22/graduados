@extends('layout')

@section('title', 'Noticias')

@section('content')


    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="mb-0">Noticias</h1>

            @auth
                <a class="btn btn-primary" href="{{ route('noticias.create') }}">
                    Registrar noticia
                </a>
            @endauth
        </div>

        <table class="table table-hover table-striped">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Noticia</th>
                    <th scope="col">Ver noticia</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
                @forelse($noticias as $noticia)
                    <tr>
                        <td>{{ $noticia->titulo }}</td>
                        <td>
                            <a href="{{ route('noticias.show', $noticia) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            <img src="{{ asset('storage/' . $noticia->foto) }}" class="rounded img-thumbnail"
                                alt="Responsive image" style="height: 100px; width= 100px;">
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No hay noticias</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $noticias->links() }}
    </div>

@endsection
