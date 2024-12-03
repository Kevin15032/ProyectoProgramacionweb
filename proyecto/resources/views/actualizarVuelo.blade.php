@extends('layouts.navadministracion')
@section('contenido')
    
<div class="container mt-5">
    @session('exito')
    <script> 
        Swal.fire({
           title: "Respuesta servidor!",
           text: "{{ $value }}",
           icon: "success"
        });
     </script>
@endsession

    <h2>Registro de Vuelos</h2>
    <form action="{{ route('/admivuelos/{id}') }}"  method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="numeroVuelo">Número de Vuelo:</label>
            <input type="text" class="form-control" name="numeroVuelo" value="{{ old('numeroVuelo') }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('numeroVuelo') }}</small>
        </div>

        <div class="form-group mt-3">
            <label for="aerolinea">Aerolínea:</label>
            <input type="text" class="form-control" name="aerolinea" value="{{ old('aerolinea') }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('aerolinea') }}</small>
        </div>

        <div class="form-group">
    <label for="horario" class="form-label">Horario:</label>
    <input type="time" class="form-control form-control-lg" name="horario" value="{{ old('horario') }}" required>
    <small class="text-danger fst-italic">{{ $errors->first('horario') }}</small>
</div>


        <div class="form-group mt-3">
            <label for="ciudadOrigen">Duracion del vuelo:</label>
            <input type="text" class="form-control" name="duracionVuelo" value="{{ old('duracionVuelo') }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('duracionVuelo') }}</small>
        </div>

        <div class="form-group mt-3">
            <label for="ciudadOrigen">Precio del vuelo:</label>
            <input type="text" class="form-control" name="precioVuelo" value="{{ old('precioVuelo') }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('precioVuelo') }}</small>
        </div>

        <div class="form-group mt-3">
            <label for="ciudadOrigen">Ciudad de Origen:</label>
            <input type="text" class="form-control" name="ciudadOrigen" value="{{ old('ciudadOrigen') }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('ciudadOrigen') }}</small>
        </div>

        <div class="form-group mt-3">
            <label for="ciudadDestino">Ciudad de Destino:</label>
            <input type="text" class="form-control" name="ciudadDestino" value="{{ old('ciudadDestino') }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('ciudadDestino') }}</small>
        </div>

        <div class="form-group mt-3">
            <label for="ciudadOrigen">Tiene escalas:</label>
            <input type="text" class="form-control" name="tieneEscalas" value="{{ old('tieneEscalas') }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('tieneEscalas') }}</small>
        </div>

     

        <button type="submit" class="btn btn-primary mt-3">Guardar Vuelo</button>
    </form>
</div>


@endsection

