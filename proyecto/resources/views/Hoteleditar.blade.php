@extends('layouts.navadministracion')

@section('contenido')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Listado de Hoteles</h1>
    <a href="{{ route('crearHotel') }}" class="btn btn-secondary mt-4">Regresar</a>

    <div class="row">
        @forelse($hoteles as $hotel)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $hotel->nombre }}</h5>
                    <p class="card-text">
                        {{ Str::limit($hotel->descripcion, 100) }}
                    </p>
                    <a href="{{ route('editar.hotel', $hotel->id) }}" class="btn btn-warning mb-2">Editar Hotel</a>
                    <form action="{{ route('eliminar.hotel', $hotel->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este hotel?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">Eliminar Hotel</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <p class="text-center">No hay hoteles registrados.</p>
        @endforelse
    </div>
</div>
@endsection
