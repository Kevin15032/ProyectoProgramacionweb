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
    <form action="/procesarVuelo" method="POST">
        @csrf
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
            <label for="precioVuelo">Precio:</label>
            <input type="number" class="form-control" name="precioVuelo" value="{{ old('precioVuelo') }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('precioVuelo') }}</small>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Guardar Vuelo</button>
    </form>
</div>


@endsection