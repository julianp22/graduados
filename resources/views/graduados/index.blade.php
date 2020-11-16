@extends('layout')

@section('title', 'Graduados')

@section('content')


<div class="container py-4">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="mb-0">Graduados de la carrera</h1>

		@auth
			<a class="btn btn-primary" href="{{ route('graduados.create') }}">
				Registrar graduado
			</a>
		@endauth
	</div>

	<ul class="list-group">
		@forelse($graduados as $graduado)
			<li class="list-group-item border-0 mb-3 shadow-sm">
				<a class="text-secondary d-flex justify-content-between align-items-center" href="{{ route('graduados.show', $graduado) }}">
					<span class="font-weight-bold">
						{{ $graduado->nombre }}
					</span>
					<span class="text-black-50">
						{{ $graduado->created_at->format('d/m/Y') }}
					</span>
				</a>
			</li>
		@empty
			<li class="list-group-item border-0 mb-3 shadow-sm">
				No hay graduados
			</li>
		@endforelse

		{{ $graduados->links() }}
	</ul>
</div>

@endsection