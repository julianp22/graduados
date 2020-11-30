@extends('layout')

@section('title', 'Ofertas')

@section('content')


    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="mb-0">Ofertas laborales</h1>

            @auth
                <a class="btn btn-primary" href="{{ route('ofertas.create') }}">
                    Registrar oferta
                </a>
            @endauth
        </div>

        <table class="table table-hover table-striped">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Cargo</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Ver</th>
                </tr>
            </thead>
            <tbody>
                @forelse($ofertas as $oferta)
                    <tr>
                        <td>{{ $oferta->cargo }}</td>
                        <td>{{ $oferta->empresa }}</td>
                        <td>${{ $oferta->salario }}</td>
                        <td>
                            <a href="{{ route('ofertas.show', $oferta) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No hay ofertas</td>
                    </tr>
                @endforelse
            </tbody>
            {{ $ofertas->links() }}
        </table>
    </div>

@endsection
