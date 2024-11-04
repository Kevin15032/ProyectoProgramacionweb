@extends('layouts.navadministracion')
@section('contenido')
<div class="container mt-5">
    @if (session('exito'))
    <script>
        Swal.fire({
            title: "Respuesta servidor!",
            text: "{{ session('exito') }}",
            icon: "success"
        });
    </script>
@endif

    <h2>Registro de Hoteles</h2>
    <form action="/procesarhotel" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombreHotel">Nombre del Hotel:</label>
            <input type="text" class="form-control" name="nombreHotel" value="{{ old('nombreHotel') }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('nombreHotel') }}</small>
        </div>

        <div class="form-group mt-3">
            <label for="categoria">Categoría:</label>
            <select class="form-control" name="categoria">
                <option value="1">1 estrella</option>
                <option value="2">2 estrellas</option>
                <option value="3">3 estrellas</option>
                <option value="4">4 estrellas</option>
                <option value="5">5 estrellas</option>
            </select>
        </div>

        <div class="form-group mt-3">
            <label for="ciudad">Ciudad:</label>
            <input type="text" class="form-control" name="ciudad" value="{{ old('ciudad') }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('ciudad') }}</small>
        </div>

        <div class="form-group mt-3">
            <label for="precio">Precio por Noche:</label>
            <input type="number" class="form-control" name="precio" value="{{ old('precio') }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('precio') }}</small>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Guardar Hotel</button>
    </form>
</div>



@endsection