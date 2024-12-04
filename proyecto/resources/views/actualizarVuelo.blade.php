{{-- Vista actualizarVuelo para editar un vuelo existente --}}
@extends('layouts.navadministracion')
@section('contenido')

<div class="container mt-5">
    
    @if (session('exito'))
        <script>
            Swal.fire({
                title: "¡Actualización exitosa!",
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endif

    <h2 class="mb-4">Actualizar Vuelo</h2>
    <form action="{{ route('actualizarVuelo', $vuelo->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Número de vuelo --}}
        <div class="form-group">
            <label for="numeroVuelo">Número de Vuelo:</label>
            <input type="text" class="form-control" name="numeroVuelo" value="{{ $vuelo->numero }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('numeroVuelo') }}</small>
        </div>

        {{-- Aerolínea --}}
        <div class="form-group mt-3">
            <label for="aerolinea">Aerolínea:</label>
            <input type="text" class="form-control" name="aerolinea" value="{{ $vuelo->aerolinea }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('aerolinea') }}</small>
        </div>

        {{-- Horario --}}
        <div class="form-group mt-3">
            <label for="horario">Horario:</label>
            <input type="time" class="form-control" name="horario" value="{{ $vuelo->horario }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('horario') }}</small>
        </div>

        {{-- Duración --}}
        <div class="form-group mt-3">
            <label for="duracionVuelo">Duración del vuelo:</label>
            <input type="text" class="form-control" name="duracionVuelo" value="{{ $vuelo->duracion }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('duracionVuelo') }}</small>
        </div>

        {{-- Precio --}}
        <div class="form-group mt-3">
            <label for="precioVuelo">Precio del vuelo:</label>
            <input type="text" class="form-control" name="precioVuelo" value="{{ $vuelo->precio }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('precioVuelo') }}</small>
        </div>

        {{-- Ciudad de Origen --}}
        <div class="form-group mt-3">
            <label for="ciudadOrigen">Ciudad de Origen:</label>
            <input type="text" class="form-control" name="ciudadOrigen" value="{{ $vuelo->ciudad_origen }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('ciudadOrigen') }}</small>
        </div>

        {{-- Ciudad de Destino --}}
        <div class="form-group mt-3">
            <label for="ciudadDestino">Ciudad de Destino:</label>
            <input type="text" class="form-control" name="ciudadDestino" value="{{ $vuelo->ciudad_destino }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('ciudadDestino') }}</small>
        </div>

        {{-- Escalas --}}
        <div class="form-group mt-3">
            <label for="tieneEscalas">Tiene escalas:</label>
            <input type="text" class="form-control" name="tieneEscalas" value="{{ $vuelo->tiene_escalas }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('tieneEscalas') }}</small>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Actualizar Vuelo</button>
    </form>
</div>

@endsection


