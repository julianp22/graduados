@extends('layout')

@section('title', 'Eventos')

@section('content')


    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="mb-0">Eventos</h1>

            @auth
                <a class="btn btn-primary" href="{{ route('eventos.create') }}">
                    Registrar evento
                </a>
            @endauth
        </div>

        <table class="table table-hover table-striped">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Evento</th>
                    <th scope="col">Fecha de inicio</th>
                    <th scope="col">Fecha fin</th>
                    <th scope="col">Ver</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
                @forelse($eventos as $evento)
                    <tr>
                        <td>{{ $evento->titulo }}</td>
                        <td>{{ $evento->fecha_inicio }}</td>
                        <td>{{ $evento->fecha_fin }}</td>
                        <td>
                            <a href="{{ route('eventos.show', $evento) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            <img src="{{ asset('storage/' . $evento->foto) }}" class="rounded img-thumbnail"
                                alt="Responsive image" style="height: 100px; width= 100px;">
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No hay eventos</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $eventos->links() }}
    </div>

@endsection
