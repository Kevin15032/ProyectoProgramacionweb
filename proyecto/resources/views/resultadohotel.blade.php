@extends('layouts.navformularios')

@section('contenido')
<div class="container my-5">
    <h1 class="display-4 mb-4">Hoteles Disponibles</h1>

    
    <form method="GET" action="{{ route('buscarHotel') }}" class="mb-4">
        <div class="row">
            
            <div class="col-md-3">
                <label for="destino" class="form-label">Destino</label>
                <input type="text" name="destino" id="destino" class="form-control" placeholder="Ciudad o destino" value="{{ request('destino') }}">
            </div>

            
            <div class="col-md-3">
                <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
                <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" value="{{ request('fecha_inicio') }}">
            </div>
            <div class="col-md-3">
                <label for="fecha_fin" class="form-label">Fecha Fin</label>
                <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" value="{{ request('fecha_fin') }}">
            </div>

            
            <div class="col-md-3">
                <label for="huespedes" class="form-label">Huéspedes</label>
                <input type="number" name="huespedes" id="huespedes" class="form-control" placeholder="Número de huéspedes" value="{{ request('huespedes') }}">
            </div>

            
            <div class="col-md-3">
                <label for="categoria" class="form-label">Categoría</label>
                <select name="categoria" id="categoria" class="form-select">
                    <option value="">Todas las categorías</option>
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}" {{ request('categoria') == $i ? 'selected' : '' }}>{{ $i }} Estrellas</option>
                    @endfor
                </select>
            </div>
            <div class="col-md-3">
                <label for="precio_max" class="form-label">Precio Máximo</label>
                <input type="number" name="precio_max" id="precio_max" class="form-control" placeholder="Precio máximo" value="{{ request('precio_max') }}">
            </div>
        </div>

        <div class="text-end mt-3">
            <button type="submit" class="btn btn-primary">Buscar</button>
            <a href="{{ route('buscarHotel') }}" class="btn btn-secondary">Limpiar</a>
        </div>
    </form>

    
    <div class="row">
        @forelse($hoteles as $hotel)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $hotel->nombre }}</h5>
                    <p class="card-text">
                        {{ Str::limit($hotel->descripcion, 100) }}
                    </p>
                    <a href="{{ route('detalles.hotel', $hotel->id) }}" class="btn btn-primary">Ver detalles</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <p class="text-center text-muted">No se encontraron hoteles con los criterios seleccionados.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection

