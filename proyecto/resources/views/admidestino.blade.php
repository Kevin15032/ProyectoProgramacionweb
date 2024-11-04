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

    <h2>Registro de Destinos</h2>
    <form action="/procesarDestino" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombreDestino">Nombre del Destino:</label>
            <input type="text" class="form-control" name="nombreDestino" value="{{ old('nombreDestino') }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('nombreDestino') }}</small>
        </div>

        <div class="form-group mt-3">
            <label for="pais">País:</label>
            <input type="text" class="form-control" name="pais" value="{{ old('pais') }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('pais') }}</small>
        </div>

        <div class="form-group mt-3">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" name="descripcion" rows="3" required>{{ old('descripcion') }}</textarea>
            <small class="text-danger fst-italic">{{ $errors->first('descripcion') }}</small>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Guardar Destino</button>
    </form>
</div>


@endsection