@extends('layouts.navformularios')

@section('contenido')
<div class="container my-5">
    <h1 class="display-4 mb-4">Buscador de Vuelos</h1>

    <form method="GET" action="{{ route('buscarVuelo') }}" class="mb-4">
        <div class="row">
            <!-- Origen -->
            <div class="col-md-3">
                <label for="ciudad_origen" class="form-label">Ciudad de Origen</label>
                <input type="text" name="ciudad_origen" id="ciudad_origen" class="form-control" placeholder="Ciudad de origen" value="{{ request('ciudad_origen') }}">
            </div>

            <!-- Destino -->
            <div class="col-md-3">
                <label for="ciudad_destino" class="form-label">Ciudad de Destino</label>
                <input type="text" name="ciudad_destino" id="ciudad_destino" class="form-control" placeholder="Ciudad de destino" value="{{ request('ciudad_destino') }}">
            </div>

            <!-- Fecha de Salida -->
            <div class="col-md-3">
                <label for="fecha_salida" class="form-label">Fecha de Salida</label>
                <input type="date" name="fecha_salida" id="fecha_salida" class="form-control" value="{{ request('fecha_salida') }}">
            </div>

            <!-- Fecha de Regreso -->
            <div class="col-md-3">
                <label for="fecha_regreso" class="form-label">Fecha de Regreso</label>
                <input type="date" name="fecha_regreso" id="fecha_regreso" class="form-control" value="{{ request('fecha_regreso') }}">
            </div>

            <!-- Precio mínimo -->
            <div class="col-md-3 mt-3">
                <label for="precio_min" class="form-label">Precio Mínimo</label>
                <input type="number" name="precio_min" id="precio_min" class="form-control" placeholder="Precio mínimo" value="{{ request('precio_min') }}">
            </div>

            <!-- Precio máximo -->
            <div class="col-md-3 mt-3">
                <label for="precio_max" class="form-label">Precio Máximo</label>
                <input type="number" name="precio_max" id="precio_max" class="form-control" placeholder="Precio máximo" value="{{ request('precio_max') }}">
            </div>

            <!-- Aerolínea -->
            <div class="col-md-3 mt-3">
                <label for="aerolinea" class="form-label">Aerolínea</label>
                <input type="text" name="aerolinea" id="aerolinea" class="form-control" placeholder="Aerolínea" value="{{ request('aerolinea') }}">
            </div>

            <!-- Escalas -->
            <div class="col-md-3 mt-3">
                <label for="escalas" class="form-label">Escalas</label>
                <select name="escalas" id="escalas" class="form-select">
                    <option value="">Todas</option>
                    <option value="0" {{ request('escalas') === '0' ? 'selected' : '' }}>Sin Escalas</option>
                    <option value="1" {{ request('escalas') === '1' ? 'selected' : '' }}>Con Escalas</option>
                </select>
            </div>
        </div>

        <div class="text-end mt-4">
            <button type="submit" class="btn btn-primary">Buscar</button>
            <a href="{{ route('buscarVuelo') }}" class="btn btn-secondary">Limpiar</a>
        </div>
    </form>

    <!-- Resultados -->
    <div class="row">
        @forelse($vuelos as $vuelo)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Vuelo: {{ $vuelo->numero }}</h5>
                    <p class="card-text">Origen: {{ $vuelo->ciudad_origen }}</p>
                    <p class="card-text">Destino: {{ $vuelo->ciudad_destino }}</p>
                    <p class="card-text">Precio: ${{ $vuelo->precio }}</p>
                    <a href="{{ route('detalle.vuelo', $vuelo->id) }}" class="btn btn-primary">Ver detalles</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <p class="text-center text-muted">No se encontraron vuelos con los criterios seleccionados.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection


