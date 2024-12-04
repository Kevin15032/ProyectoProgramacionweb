{{-- Vista vervuelos donde se muestra los vuelos para actualizar y eliminar --}}
@extends('layouts.navadministracion')
@section('contenido')

@if (session('exito'))
    <script> 
        Swal.fire({
            title: "¡Respuesta del Servidor!",
            text: "{{ session('exito') }}",
            icon: "success"
        });
    </script>
@endif

<div class="row">
    @forelse($vuelos as $vuelo)
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Vuelo: {{ $vuelo->numero }}</h5>
                <p class="card-text">Origen: {{ $vuelo->ciudad_origen }}</p>
                <p class="card-text">Destino: {{ $vuelo->ciudad_destino }}</p>
                <p class="card-text">Precio: ${{ $vuelo->precio }}</p>
                <a href="{{ route('editarVuelo', $vuelo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('eliminarVuelo', $vuelo->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este vuelo?')">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <p>No hay vuelos disponibles.</p>
    @endforelse
</div>


@endsection
