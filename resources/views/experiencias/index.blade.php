@extends('layout')

@section('title', 'Experiencias')

@section('content')


<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Experiencias de graduados</h1>

        @auth
        <a class="btn btn-primary" href="{{ route('experiencias.create') }}">
            Registrar experiencia
        </a>
        @endauth
    </div>

    <table class="table table-hover table-striped">
        <thead class="thead-light">
            <tr>
                <th scope="col">Nombre graduado</th>
                <th scope="col">Vídeo</th>
                <th scope="col">Ver</th>
            </tr>
        </thead>
        <tbody>
            @forelse($experiencias as $experiencia)
            <tr>
                @foreach($graduados as $graduado)
                @if($graduado->id == $experiencia->graduado_id)
                <td>{{ $graduado->nombre }}</td>
                <td>
                    <div class="embed-responsive embed-responsive-16by9">
                        {!! $experiencia->url_video !!}
                    </div>
                </td>
                <td>
                    <a href="{{ route('experiencias.show', $experiencia, $graduado) }}">
                        <i class="fas fa-eye"></i>
                    </a>
                </td>
                @endif
                @endforeach
            </tr>
            @empty
            <tr>
                <td colspan="3">No hay experiencias</td>
            </tr>
            @endforelse
        </tbody>
        {{ $experiencias->links() }}
    </table>
</div>

@endsection