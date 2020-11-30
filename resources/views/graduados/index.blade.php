@extends('layout')

@section('title', 'Graduados')

@section('content')


    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="mb-0">Egresados</h1>

            @auth
                <a class="btn btn-primary" href="{{ route('graduados.create') }}">
                    Registrar graduado
                </a>
            @endauth
        </div>

        <table class="table table-hover table-striped">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha de graduación</th>
                    <th scope="col">Ver graduado</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
                @forelse($graduados as $graduado)
                    <tr>
                        <td>{{ $graduado->nombre }}</td>
                        <td>{{ $graduado->fecha_grado }}</td>
                        <td>
                            <a href="{{ route('graduados.show', $graduado) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            <img src="{{ asset('storage/' . $graduado->foto) }}" class="rounded img-thumbnail"
                                alt="Responsive image" style="height: 100px; width= 100px;">
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No hay ofertas</td>
                    </tr>
                @endforelse
            </tbody>
            {{ $graduados->links() }}
        </table>
    </div>

@endsection
