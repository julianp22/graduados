@extends('layout')

@section('title', 'Productos')

@section('content')


<div class="container py-4">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="mb-0">Productos de la tienda</h1>

		@auth
			<a class="btn btn-primary" href="{{ route('productos.create') }}">
				Agregar producto
			</a>
		@endauth
	</div>

	<ul class="list-group">
		@forelse($productos as $producto)
			<li class="list-group-item border-0 mb-3 shadow-sm">
				<a class="text-secondary d-flex justify-content-between align-items-center" href="{{ route('productos.show', $producto) }}">
					<span class="font-weight-bold">
						{{ $producto->nombre }}
					</span>
					<span class="text-black-50">
						{{ $producto->created_at->format('d/m/Y') }}
					</span>
				</a>
			</li>
		@empty
			<li class="list-group-item border-0 mb-3 shadow-sm">
				No hay productos
			</li>
		@endforelse

		{{ $productos->links() }}
	</ul>
</div>

@endsection